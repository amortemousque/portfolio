export class QuickSort extends HTMLUListElement {
    constructor() {
        super();
    }

    connectedCallback() {
        let column = parseInt(this.getAttribute('column'))

        for (let i = 0; i < column; i++) {
            let li = document.createElement('li');
            li.classList.add('column');
            let max = 200;
            let min = 50;
            let h = Math.floor(Math.random() * (+max - +min)) + +min;
            li.style.height = `${h}px`; 
            this.appendChild(li)
        }
    }
}

window.customElements.define('my-quick-sort', QuickSort, { extends: 'ul' })