document.getElementById("buy-button").addEventListener("click", function() {
    // Incrementa o contador do carrinho
    let cartCountElement = document.getElementById("cart-count");
    let currentCount = parseInt(cartCountElement.textContent);
    cartCountElement.textContent = currentCount + 1;

    // Adiciona a animação de "pulo" ao ícone do carrinho
    let cartIcon = document.getElementById("cart-icon");
    cartIcon.classList.add("cart-bounce");

    // Remove a animação após 0.5 segundos (duração da animação)
    setTimeout(function() {
        cartIcon.classList.remove("cart-bounce");
    }, 500);
});
