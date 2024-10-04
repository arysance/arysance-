// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function() {
    // Burger Menu Toggle
    const burger = document.querySelector('.main-burger');
    const menuContent = document.querySelector('.menu-content');

    // Toggle menu visibility on burger click
    burger.addEventListener('click', function() {
        menuContent.classList.toggle('active');
    });

    // Form Validation (Basic)
    const form = document.getElementById('subscription-form'); // Update to match your form ID

    // Validate form fields on submit
    form.addEventListener('submit', function(event) {
        const email = form.querySelector('input[name="email"]').value.trim();
        const password = form.querySelector('input[name="password"]').value.trim();

        // Check if fields are empty
        if (!email || !password) {
            event.preventDefault();
            alert('Please fill in all fields.');
        }
    });
});
