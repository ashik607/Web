document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.getElementById("name");
    const emailInput = document.getElementById("email");
    const phoneInput = document.getElementById("phone");
    const passwordInput = document.getElementById("password");
    const maleInput = document.getElementById("male");

    const form = document.getElementById("registration-form");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const name = nameInput.value;
        const email = emailInput.value;
        const phone = phoneInput.value;
        const password = passwordInput.value;
        let gender = '';

        if (maleInput.checked) {
            gender = "Male";
        } else {
            gender = "Female";
        }

        // validation code here

        // If validation passes, you can use the form data
        // For example:
        console.log("Name: " + name);
        console.log("Email: " + email);
        console.log("Phone: " + phone);
        console.log("Password: " + password);
        console.log("Gender: " + gender);
    });
});
