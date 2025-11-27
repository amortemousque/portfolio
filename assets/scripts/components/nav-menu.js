export class NavMenu extends HTMLElement {
  connectedCallback() {
    this.querySelector('a[href^="/' + location.pathname.split("/")[1] + '"]').classList.add(
      "active"
    );
  }
}

customElements.define("nav-menu", NavMenu);
