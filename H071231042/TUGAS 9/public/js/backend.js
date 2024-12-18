
// Tambahkan script untuk menghilangkan alert setelah 5 detik
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        var alert = document.querySelector('.alert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');
        }
    }, 5000);
});
