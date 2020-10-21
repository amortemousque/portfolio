export class DarkModeToggle extends HTMLElement {
  connectedCallback() {
    if (localStorage.getItem("dark-mode") === "true") document.body.classList.add("dark-mode");
    this.addEventListener("click", this.toggleDarkMode.bind(this));

    document.body.classList.add("theme-loaded");
  }

  toggleDarkMode() {
    const isDarkMode = document.body.classList.toggle("dark-mode");
    if (document.querySelector(".hilightjs-dark")) {
      document.querySelector(".hilightjs-dark").toggleAttribute("disabled");
      document.querySelector(".hilightjs-light").toggleAttribute("disabled");
    }
    localStorage.setItem("dark-mode", isDarkMode);
  }
}

customElements.define("dark-mode-toggle", DarkModeToggle);
