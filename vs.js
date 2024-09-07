// Burger Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.main-burger');
    const nav = document.querySelector('nav');

    burger.addEventListener('click', function() {
        nav.classList.toggle('active');
    });
});

// Form Validation (Basic)
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactform');
    
    form.addEventListener('submit', function(event) {
        const name = form.querySelector('input[name="cf-name"]').value.trim();
        const email = form.querySelector('input[name="cf-email"]').value.trim();
        const message = form.querySelector('textarea[name="cf-message"]').value.trim();

        if (!name || !email || !message) {
            event.preventDefault();
            alert('Please fill in all fields.');
        }
    });
});
