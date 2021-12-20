export default class Cart {
    constructor(selector) {
        this.cart = document.querySelector(selector);
    }

    get cartNode() {
        return this.cart;
    }

    set cartNode(selector) {
        console.log(selector);
        this.cart = document.querySelector(selector)
    }

}
