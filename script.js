// script.js
document.addEventListener('DOMContentLoaded', () => {
    const products = document.querySelectorAll('.product');
    const productInfoDiv = document.getElementById('product-info');

    products.forEach(product => {
        product.addEventListener('click', () => {
            const name = product.getAttribute('data-name');
            const price = product.getAttribute('data-price');
            const description = product.getAttribute('data-description');

            productInfoDiv.innerHTML = 
                <><h2>${name}</h2><p>السعر: ${price}</p><p>${description}</p></>
            ;
            productInfoDiv.style.display = 'block';
        });
    });

    productInfoDiv.addEventListener('click', () => {
        productInfoDiv.style.display = 'none';
    });
});