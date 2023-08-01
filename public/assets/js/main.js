function validateForm() {
    // Mendapatkan elemen-elemen input dan checkbox
    var nameInput = document.querySelector('input[name="name"]');
    var emailInput = document.querySelector('input[name="email"]');
    var phoneInput = document.querySelector('input[name="phone"]');
    var workInput = document.querySelector('input[name="work"]');
    var checkbox1 = document.querySelector('input[name="checkbox1"]');
    var checkbox2 = document.querySelector('input[name="checkbox2"]');
    var checkbox3 = document.querySelector('input[name="checkbox3"]');


    if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || phoneInput.value.trim() === '' || workInput.value.trim() === '') {
        alert('Masukkan semua data secara lengkap, mohon periksa lagi.');
        return false;
    }


    if (!checkbox1.checked && !checkbox2.checked && !checkbox3.checked) {
        alert('Pilih minimal satu pilihan pada checkbox.');
        return false;
    }
    return true;
}