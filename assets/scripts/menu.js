export class Menu extends HTMLElement {
  connectedCallback() {
    document
      .querySelector('nav a[href^="/' + location.pathname.split("/")[1] + '"]')
      .classList.add("active");
  }
}

customElements.define("menu");
