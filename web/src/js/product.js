import Cart from "./cart";

class Product {
    constructor(productSelector, cart) {
        this.productContainer = document.querySelector(productSelector);
        this.cart = cart;
    }

    addToCart() {
        const buttonList = this.productContainer.querySelectorAll(`.${Product.classes.button}`)
        buttonList.forEach(item => {
            item.addEventListener('click', e => {
                const button = e.target;
                e.preventDefault();
                const buttonName = button.dataset.name;

                fetch(`cart/add?name=${buttonName}`)
                    .then((response) => {
                        return response.text();
                    })
                    .then(response => {
                        const cartElement = this.cart.cartNode;
                        cartElement.innerHTML = (response);
                    })
                    .catch(err => {
                        console.error(err);
                    })
            });
        })

    }
}
Product.classes = {
    button: 'product__button',
};

const cart = new Cart('.cart');
const product = new Product('.product-list', cart);
product.addToCart();