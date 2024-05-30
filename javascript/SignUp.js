

        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {


            const nameInput = document.getElementById("name");
            const submitButton = document.getElementById("submit");
            const errorMessage = document.getElementById("NameError1");
            const errorMessage2 = document.getElementById("NameError2");
            const errorMessage3 = document.getElementById("NameError3");
            const emailInput = document.getElementById("email");
            const errorEmailMessage = document.getElementById("emailError");
            const errorEmailMessage2 = document.getElementById("emailError2");
            const errorPhoneMessage = document.getElementById("phoneError1");
            const errorPhoneMessage2 = document.getElementById("phoneError2");
            const errorPhoneMessage3 = document.getElementById("phoneError3");
            const phoneInput = document.getElementById("phone");
            const errorPassMessage = document.getElementById("passwordError1");
            const errorPassMessage2 = document.getElementById("passwordError2");
            const errorPassMessage3 = document.getElementById("passwordError3");
            const passwordInput = document.getElementById("password");
            const passwordConfirmInput = document.getElementById("passwordConfirm");
            const errorPasswordConfirm = document.getElementById("passwordCError2");
            const errorPasswordConfirm2 = document.getElementById("passwordCError1");


            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            function validatePhoneNumber(phoneNumber) {
                const regex = /^\d+$/;
                return regex.test(phoneNumber);
            }

            function validatePassword(password) {
                // check for at least one lowercase letter, one uppercase letter, and one number
                const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
                return regex.test(password);
            }


            // Define the regular expression for only letters
            const lettersOnlyRegex = /^[A-Za-z]+$/;


                const name = nameInput.value;
                if (name.length == 0) {
                    errorMessage3.style.display = "block";
                } else
                    errorMessage3.style.display = "none";


                if (!lettersOnlyRegex.test(name)) {
                    errorMessage.style.display = "block";
                } else {
                    errorMessage.style.display = "none";
                }

                if (name.length < 6) {
                    errorMessage2.style.display = "block";
                } else {
                    errorMessage2.style.display = "none";
                }
                if (emailInput.value.length == 0) {
                    errorEmailMessage2.style.display = "block";
                } else
                    errorEmailMessage2.style.display = "none";

                if (validateEmail(emailInput.value)) {

                    errorEmailMessage.style.display = "none";

                } else {
                    errorEmailMessage.style.display = "block";
                }


                if (phoneInput.value.length == 0) {
                    errorPhoneMessage3.style.display = "block";
                } else
                    errorPhoneMessage3.style.display = "none";

                if (validatePhoneNumber(phoneInput.value)) {

                    errorPhoneMessage2.style.display = "none";

                } else {
                    errorPhoneMessage2.style.display = "block";
                }
                if (phoneInput.value.length != 10) {
                    errorPhoneMessage.style.display = "block";
                } else
                    errorPhoneMessage.style.display = "none";

                if (passwordInput.value.length == 0) {
                    errorPassMessage3.style.display = "block";
                    passwordConfirmInput.disabled = true;
                } else {
                    errorPassMessage3.style.display = "none";
                    passwordConfirmInput.disabled = false;
                }

                if (validatePassword(passwordInput.value)) {

                    errorPassMessage.style.display = "none";
                    passwordConfirmInput.disabled = true;


                } else {
                    errorPassMessage.style.display = "block";
                    passwordConfirmInput.disabled = false;

                }


                if (passwordInput.value.length < 8) {
                    errorPassMessage2.style.display = "block";
                    passwordConfirmInput.disabled = true;
                } else {
                    errorPassMessage2.style.display = "none";
                    passwordConfirmInput.disabled = false;
                }

                if (passwordConfirmInput.value.length == 0) {

                    errorPasswordConfirm.style.display = "block";

                } else {
                    errorPassMessage.style.display = "none";
                }

                if (passwordConfirmInput.value != passwordInput.value) {
                    errorPasswordConfirm2.style.display = "block";
                } else {
                    errorPasswordConfirm2.style.display = "none";

                }

                if (errorMessage.style.display === "block" || errorMessage2.style.display === "block" || errorMessage3.style.display === "block" || errorEmailMessage.style.display === "block" || errorEmailMessage2.style.display === "block" || errorPhoneMessage.style.display === "block" || errorPhoneMessage2.style.display === "block" || errorPhoneMessage3.style.display === "block" || errorPassMessage.style.display === "block" || errorPassMessage2.style.display === "block" || errorPassMessage3.style.display === "block" || errorPasswordConfirm.style.display === "block" || errorPasswordConfirm2.style.display === "block") {

                    // If there are validation errors, prevent form submission
                    event.preventDefault();
                }

            });


