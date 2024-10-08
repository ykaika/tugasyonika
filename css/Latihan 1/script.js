// Ambil elemen-elemen dari form
const loginForm = document.getElementById('loginForm');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const errorMessage = document.getElementById('error-message');

// Tambahkan event listener ketika form disubmit
loginForm.addEventListener('submit', function(event) {
    event.preventDefault();  // Mencegah form dari refresh halaman otomatis

    // Ambil nilai input
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();

    // Validasi form sederhana
    if (username === '') {
        errorMessage.textContent = 'Username tidak boleh kosong!';
    } else if (password === '') {
        errorMessage.textContent = 'Password tidak boleh kosong!';
    } else if (password.length < 6) {
        errorMessage.textContent = 'Password harus minimal 6 karakter!';
    } else {
        errorMessage.textContent = '';  // Kosongkan pesan error
        alert('Login berhasil!');  // Tampilkan notifikasi jika login berhasil
        // Anda bisa menambahkan redirect atau logika lainnya di sini
    }
});