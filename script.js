function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var webinar = document.getElementById('webinar').value;
    var agree = document.getElementById('agree').checked;

    if (name == "" || email == "" || phone == "" || webinar == "" || !agree) {
        alert("Please fill in all fields and agree to the terms.");
        return false;
    }
    return true;
}
