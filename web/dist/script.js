!function(){var e={85:function(){for(var e=document.querySelectorAll(".modal-open"),t=0;t<e.length;t++)e[t].addEventListener("click",(function(e){e.preventDefault(),o()}));document.querySelector(".modal-overlay").addEventListener("click",o);var n=document.querySelectorAll(".modal-close");for(t=0;t<n.length;t++)n[t].addEventListener("click",o);function o(){var e=document.querySelector("body"),t=document.querySelector(".modal");t.classList.toggle("opacity-0"),t.classList.toggle("pointer-events-none"),e.classList.toggle("modal-active")}document.onkeydown=function(e){("key"in(e=e||window.event)?"Escape"===e.key||"Esc"===e.key:27===e.keyCode)&&document.body.classList.contains("modal-active")&&o()}}},t={};function n(o){var r=t[o];if(void 0!==r)return r.exports;var c=t[o]={exports:{}};return e[o](c,c.exports,n),c.exports}!function(){"use strict";function e(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}var t=function(){function t(e){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),this.cart=document.querySelector(e)}var n,o;return n=t,(o=[{key:"cartNode",get:function(){return this.cart},set:function(e){console.log(e),this.cart=document.querySelector(e)}}])&&e(n.prototype,o),Object.defineProperty(n,"prototype",{writable:!1}),t}();function o(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}var r=function(){function e(t,n){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.productContainer=document.querySelector(t),this.cart=n}var t,n;return t=e,(n=[{key:"addToCart",value:function(){var t=this;this.productContainer.querySelectorAll(".".concat(e.classes.button)).forEach((function(e){e.addEventListener("click",(function(e){var n=e.target;e.preventDefault();var o=n.dataset.name;fetch("cart/add?name=".concat(o)).then((function(e){return e.text()})).then((function(e){t.cart.cartNode.innerHTML=e})).catch((function(e){console.error(e)}))}))}))}}])&&o(t.prototype,n),Object.defineProperty(t,"prototype",{writable:!1}),e}();r.classes={button:"product__button"},new r(".product-list",new t(".cart")).addToCart(),n(85)}()}();