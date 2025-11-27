class SiteHeader extends HTMLElement {
  connectedCallback() {
    const variant = this.getAttribute('variant') || 'home';
    this.render(variant);
  }

  render(variant) {
    switch (variant) {
      case 'home':
      case 'posts-list':
        this.innerHTML = this.renderFullHeader();
        break;
      case 'post-detail':
        this.innerHTML = this.renderPostHeader();
        break;
    }
  }

  renderFullHeader() {
    return `
    <header>
      <div class="bar">
        <dark-mode-toggle class="button">Toggle dark mode</dark-mode-toggle>
      </div>
      <section>
        <h1 class="headline">
          <span class="first-letter">A</span>ymeric <br />
          mortemousque
        </h1>
        <nav-menu role="nav">
          <a href="/">Projects</a>
          <a href="/posts">Posts</a>
        </nav-menu>
      </section>
    </header>
    `;
  }

  renderPostHeader() {
    const title = this.getAttribute('title') || '';
    const backUrl = this.getAttribute('back-url') || '/posts';

    return `
    <header>
      <div class="bar">
        <a href="${backUrl}">&larr; Back to post</a>
        <dark-mode-toggle class="button">Toggle dark mode</dark-mode-toggle>
      </div>
      <section>
        <h1 class="headline">${title}</h1>
      </section>
    </header>
    `;
  }
}

customElements.define('site-header', SiteHeader);
