import Cart from "./cart";

class Product {
    constructor(productSelector, cart) {
        this.productContainer = document.querySelector(productSelector);
        this.cart = cart;
    }

    // ToDo: заменить этот говно-код
    addToCart() {
        const buttonList = this.productContainer.querySelectorAll(`.${Product.classes.button}`)
        buttonList.forEach(item => {
            item.addEventListener('click', e => {
                const button = e.target;
                e.preventDefault();
                const buttonName = button.dataset.name;

                fetch(`/cart/add?name=${buttonName}`)
                    .then((response) => {
                        return response.text();
                    })
                    .then(response => {
                        const cartElement = this.cart.cartNode;
                        cartElement.innerHTML = (response);
                    })
                    .then(() => {
                        const headerTotalProduct = document.querySelector('.user-info__cart-quantity');
                        const cartTotalProduct = document.querySelector('.cart-total__count');
                        headerTotalProduct.innerHTML = `(${cartTotalProduct.textContent})`
                    })
                    .catch(err => {
                        console.error(err);
                    })
            });
        })
    }

    openCartAction() {
        const buttonModalOpen = document.querySelector(`.${Product.classes.open}`)
        buttonModalOpen.addEventListener('click', e => {
            e.preventDefault();
            fetch(`/cart/open`)
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
        })
    }

    clearCartAction() {
        const buttonClearCart = document.querySelector(`.${Product.classes.clear}`)
        buttonClearCart.addEventListener('click', e => {
            if (confirm('Очистить корзину от товаров?')) {
                e.preventDefault();
                fetch(`/cart/clear`)
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
            }
        })
    }

    removeCartProduct() {
        const modal = document.querySelector('.modal');
        modal.addEventListener('click', e => {
            if (e.target && e.target.classList.contains('remove-product')) {
                const id = e.target.getAttribute('data-id');
                fetch(`/cart/remove/?id=${id}`)
                    .then((response) => {
                        console.log(response);
                        return response.text();
                    })
                    .then(response => {
                        const cartElement = this.cart.cartNode;
                        cartElement.innerHTML = (response);
                    })
                    .then(() => {
                        const headerTotalProduct = document.querySelector('.user-info__cart-quantity');
                        const cartTotalProduct = document.querySelector('.cart-total__count');
                        if (cartTotalProduct) {
                            headerTotalProduct.innerHTML = `(${cartTotalProduct.textContent})`
                        } else {
                            headerTotalProduct.innerHTML = `(0)`;
                        }
                    })
                    .catch(err => {
                        console.error(err);
                    })
            }
        })
    }
}
Product.classes = {
    button: 'product__button',
    open: 'modal-open',
    clear: 'modal-clear',
    remove: 'remove-product',
};

const cart = new Cart('.cart');
const product = new Product('.product-list', cart);
product.addToCart();
product.openCartAction();
product.clearCartAction();
product.removeCartProduct();