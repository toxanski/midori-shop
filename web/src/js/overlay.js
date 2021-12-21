import Cart from "./cart";
const cart = new Cart();

const openmodal = document.querySelectorAll('.modal-open')
for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event){
        event.preventDefault()
        toggleModal()
    })
}

const openmodalOrder = document.querySelectorAll('.modal-open-order')
for (let i = 0; i < openmodalOrder.length; i++) {
    openmodalOrder[i].addEventListener('click', function(event){
        event.preventDefault()
        toggleOrderModal();
        fetch(`/cart/order`)
            .then((response) => {
                return response.text();
            })
            .then(response => {
                const orderContainer = document.querySelector('.order-container');
                orderContainer.innerHTML = (response);
            })
            .catch(err => {
                console.error(err);
            })
    })
}

const overlay = document.querySelector('.modal-overlay')
overlay.addEventListener('click', toggleModal)

const overlayOrder = document.querySelector('.modal-overlay-order')
overlayOrder.addEventListener('click', toggleOrderModal)

const closemodal = document.querySelectorAll('.modal-close')
for (let i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

const closeOrderModal = document.querySelectorAll('.modal-close-order')
for (let i = 0; i < closeOrderModal.length; i++) {
    closeOrderModal[i].addEventListener('click', toggleOrderModal)
}

document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
    if (isEscape && document.body.classList.contains('modal-active-order')) {
        toggleOrderModal()
    }
};

function toggleModal() {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}

function toggleOrderModal() {
    toggleModal();
    const modalOrder = document.querySelector('.modal-order')
    modalOrder.classList.toggle('opacity-0')
    modalOrder.classList.toggle('pointer-events-none')
    document.body.classList.toggle('modal-active-order')
}
