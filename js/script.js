// Автоматическая прокрутка слайдера
let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(n) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    slideIndex = (n + slides.length) % slides.length;
    
    slides[slideIndex].classList.add('active');
    dots[slideIndex].classList.add('active');
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
}

// Автоматическая прокрутка каждые 5 секунд
setInterval(nextSlide, 5000);

// Обработчики для стрелок
document.querySelector('.prev')?.addEventListener('click', prevSlide);
document.querySelector('.next')?.addEventListener('click', nextSlide);

// Обработчики для точек
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        showSlide(index);
    });
});

// Обработчики для кнопок "В корзину"
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
        const productCard = button.closest('.product-card');
        if (productCard) {
            const productName = productCard.querySelector('h3').textContent;
            console.log('Продукт добавлен в корзину:', productName);
            alert(`Товар "${productName}" добавлен в корзину`);
        } else {
            console.log('Продукт добавлен в корзину');
        }
    });
});

// Обработка ссылки "Все товары"
document.querySelector('.all-products-link')?.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('Переход ко всем товарам');
    window.location.href = 'catalog.html';
});

// Cart functionality
function updateCartCount() {
    // In a real implementation, this would update based on actual cart data
    const cartCountElement = document.querySelector('.cart-count');
    if (cartCountElement) {
        // For demo purposes, just show a sample count
        cartCountElement.textContent = '3';
    }
}

// Initialize cart count when page loads
document.addEventListener('DOMContentLoaded', updateCartCount);