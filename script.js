$(document).ready(function () {
    $('#registrationForm').on('submit', function (event) {
        const name = $('#name').val();
        const email = $('#email').val();

        if (!name || !email) {
            alert('Please fill out all required fields.');
            event.preventDefault();
        }
    });
});
