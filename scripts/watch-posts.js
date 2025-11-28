const chokidar = require('chokidar');
const path = require('path');
const { exec } = require('child_process');
const util = require('util');

const execPromise = util.promisify(exec);

const MARKDOWN_DIR = path.join(__dirname, '../posts/markdown');

// Debounce function
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Rebuild all posts and listing
async function rebuildAll() {
  try {
    const { stdout, stderr } = await execPromise('node scripts/build-posts.js');
    if (stdout) console.log(stdout.trim());
    if (stderr) console.error(stderr.trim());
  } catch (error) {
    console.error('❌ Error rebuilding posts:', error.message);
  }
}

// Debounced rebuild function
const debouncedRebuild = debounce(rebuildAll, 300);

console.log('👀 Watching markdown files...');
console.log(`📁 Watching: ${MARKDOWN_DIR}\n`);

// Watch markdown directory
const watcher = chokidar.watch(`${MARKDOWN_DIR}/**/*.md`, {
  ignored: /node_modules/,
  persistent: true,
  ignoreInitial: true
});

// Handle file changes
watcher
  .on('add', filePath => {
    console.log(`📄 Added: ${path.basename(filePath)}`);
    debouncedRebuild();
  })
  .on('change', filePath => {
    console.log(`✏️  Changed: ${path.basename(filePath)}`);
    debouncedRebuild();
  })
  .on('unlink', filePath => {
    console.log(`🗑️  Deleted: ${path.basename(filePath)}`);
    // Extract slug from filename and delete corresponding HTML
    const slug = path.basename(filePath, '.md');
    const fs = require('fs-extra');
    const htmlPath = path.join(__dirname, '../posts', `${slug}.html`);
    try {
      if (fs.existsSync(htmlPath)) {
        fs.removeSync(htmlPath);
        console.log(`✓ Removed: ${slug}.html`);
      }
    } catch (error) {
      console.error(`❌ Error removing ${slug}.html:`, error.message);
    }
    // Rebuild listing after deletion
    setTimeout(() => debouncedRebuild(), 100);
  })
  .on('error', error => {
    console.error('❌ Watcher error:', error);
  });

// Handle process termination
process.on('SIGINT', () => {
  console.log('\n👋 Stopping watcher...');
  watcher.close();
  process.exit(0);
});

process.on('SIGTERM', () => {
  console.log('\n👋 Stopping watcher...');
  watcher.close();
  process.exit(0);
});
