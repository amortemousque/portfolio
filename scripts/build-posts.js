const fs = require('fs-extra');
const path = require('path');
const matter = require('gray-matter');
const { marked } = require('marked');

const POSTS_DIR = path.join(__dirname, '../posts');
const MARKDOWN_DIR = path.join(POSTS_DIR, 'markdown');
const TEMPLATE_PATH = path.join(__dirname, '../templates/post-template.html');

// Configure marked
marked.setOptions({
  breaks: true,
  gfm: true
});

// Format date from YYYY-MM-DD to "Month Day, Year"
function formatDate(dateString) {
  const date = new Date(dateString);
  const months = [
    'January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'
  ];
  return `${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}`;
}

// Post-process HTML (headings, diagrams, etc.)
function postProcessHtml(html) {
  // Add title class to h2 elements
  html = html.replace(/<h2>/g, '<h2 class="title">');

  // Transform mermaid code blocks (```mermaid) into <div class="mermaid"> for client-side rendering
  // marked outputs: <pre><code class="language-mermaid">...</code></pre>
  html = html.replace(
    /<pre><code class="language-mermaid">([\s\S]*?)<\/code><\/pre>/g,
    (_, code) => {
      const decoded = code
        .replace(/&amp;/g, '&')
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&quot;/g, '"')
        .replace(/&#39;/g, "'");

      return `<div class="mermaid">\n${decoded}\n</div>`;
    }
  );

  return html;
}

// Build a single post
function buildPost(markdownPath) {
  const content = fs.readFileSync(markdownPath, 'utf-8');
  const { data: frontmatter, content: markdown } = matter(content);
  
  // Validate required fields
  if (!frontmatter.title || !frontmatter.slug || !frontmatter.published) {
    console.error(`⚠️  Skipping ${path.basename(markdownPath)}: missing required fields`);
    return null;
  }

  // Convert markdown to HTML using marked
  let htmlContent = marked(markdown);
  
  // Post-process HTML
  htmlContent = postProcessHtml(htmlContent);
  
  // Read template
  let template = fs.readFileSync(TEMPLATE_PATH, 'utf-8');
  
  // Replace placeholders
  const ogTitle = `${frontmatter.title} - Aymeric Mortemousque`;
  const publishedDate = formatDate(frontmatter.published);
  
  template = template.replace(/\{\{title\}\}/g, frontmatter.title);
  template = template.replace(/\{\{description\}\}/g, frontmatter.description || '');
  template = template.replace(/\{\{keywords\}\}/g, frontmatter.keywords || '');
  template = template.replace(/\{\{slug\}\}/g, frontmatter.slug);
  template = template.replace(/\{\{ogTitle\}\}/g, ogTitle);
  template = template.replace(/\{\{content\}\}/g, htmlContent);
  template = template.replace(/\{\{publishedDate\}\}/g, publishedDate);
  
  // Write HTML file
  const outputPath = path.join(POSTS_DIR, `${frontmatter.slug}.html`);
  fs.writeFileSync(outputPath, template, 'utf-8');
  
  return {
    title: frontmatter.title,
    slug: frontmatter.slug,
    description: frontmatter.description || '',
    published: frontmatter.published,
    publishedDate: publishedDate
  };
}

// Main build function
function buildAllPosts() {
  console.log('📝 Building posts from markdown...');
  
  // Ensure markdown directory exists
  if (!fs.existsSync(MARKDOWN_DIR)) {
    console.error(`❌ Markdown directory not found: ${MARKDOWN_DIR}`);
    process.exit(1);
  }
  
  // Get all markdown files
  const markdownFiles = fs.readdirSync(MARKDOWN_DIR)
    .filter(file => file.endsWith('.md'))
    .map(file => path.join(MARKDOWN_DIR, file));
  
  if (markdownFiles.length === 0) {
    console.log('⚠️  No markdown files found');
    return;
  }
  
  // Build each post
  markdownFiles.forEach(markdownPath => {
    try {
      const post = buildPost(markdownPath);
      if (post) {
        console.log(`✓ Built: ${post.slug}.html`);
      }
    } catch (error) {
      console.error(`❌ Error building ${path.basename(markdownPath)}:`, error.message);
    }
  });
  
  console.log('✅ Build complete!');
}

buildAllPosts();
