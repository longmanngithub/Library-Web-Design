/* Validating the form */

(() => {
  ("use strict");

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");
  const form = document.getElementById("forgot-form");

  // Helper function to toggle validation feedback
  function toggleValidation(input, isValid) {
    if (isValid) {
      input.classList.remove("is-invalid");
      input.classList.add("is-valid");
    } else {
      input.classList.remove("is-valid");
      input.classList.add("is-invalid");
    }
  }

  // Password and Confirm Password Validation
  const password = document.getElementById("floatingPassword");
  const confirmPassword = document.getElementById("floatingConfirmPassword");

  function validatePasswordMatch() {
    if (confirmPassword.value === "") {
      confirmPassword.classList.remove("is-valid", "is-invalid");
      confirmPassword.setCustomValidity("");
      return;
    }

    const isValid = password.value === confirmPassword.value;
    toggleValidation(confirmPassword, isValid);
    confirmPassword.setCustomValidity(isValid ? "" : "Passwords do not match");
  }

  password.addEventListener("input", validatePasswordMatch);
  confirmPassword.addEventListener("input", validatePasswordMatch);

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          // Form is valid, trigger the modal
          event.preventDefault(); // Prevent form submission
          var modal = new bootstrap.Modal(
            document.getElementById("modal-success")
          );
          modal.show();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });

  // Reset form when 'successful payment' modal is closed
  const modalSuccess = document.getElementById("modal-success");
  modalSuccess.addEventListener("hidden.bs.modal", function () {
    form.reset();
    Array.from(form.elements).forEach((element) => {
      element.classList.remove("is-valid");
      element.classList.remove("is-invalid");
    });
    form.classList.remove("was-validated");
  });
})();
