import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const roleInputs = document.querySelectorAll('input[name="role"]');
    const adminKeyInput = document.getElementById('admin-key');

    roleInputs.forEach(input => {
        input.addEventListener('change', function () {
            if (this.value === 'Admin') {
                adminKeyInput.style.display = 'block';
            } else {
                adminKeyInput.style.display = 'none';
            }
        });
    });
});