document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');
    const form = document.getElementById('register-form');
    
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        
        if (value.length > 11) {
            value = value.slice(0, 11);
        }
        
        let formattedValue = '+7 (';
        
        if (value.length > 1) {
            formattedValue += value.substring(1, 4);
        }
        if (value.length >= 4) {
            formattedValue += ') ';
        }
        if (value.length > 4) {
            formattedValue += value.substring(4, 7);
        }
        if (value.length >= 7) {
            formattedValue += '-';
        }
        if (value.length > 7) {
            formattedValue += value.substring(7, 9);
        }
        if (value.length >= 9) {
            formattedValue += '-';
        }
        if (value.length > 9) {
            formattedValue += value.substring(9, 11);
        }
        
        e.target.value = formattedValue;
    });
    
    phoneInput.addEventListener('keypress', function(e) {
        if (!/\d/.test(e.key) && !['Backspace', 'Delete', 'Tab'].includes(e.key)) {
            e.preventDefault();
        }
    });
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        
        const phoneRegex = /^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
        if (!phoneRegex.test(data.phone)) {
            alert('Пожалуйста, введите корректный номер телефона');
            return;
        }
    });
});