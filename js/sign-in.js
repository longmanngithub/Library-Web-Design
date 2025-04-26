/* Validating the form */

(() => {
  ("use strict");

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

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

  // Email Validation
  const email = document.getElementById("floatingInput");
  email.addEventListener("input", function () {
    // EMAIL FOMART
    const regex =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const isValid = regex.test(email.value);
    toggleValidation(email, isValid);
    email.setCustomValidity(isValid ? "" : "Invalid email address");
  });

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        event.preventDefault(); // Prevent default form submission

        if (form.checkValidity()) {
          // Reset the form and validation state
          form.reset();
          Array.from(form.elements).forEach((element) => {
            element.classList.remove("is-valid");
            element.classList.remove("is-invalid");
          });
          form.classList.remove("was-validated");

          // Simulate a successful login and redirect
          setTimeout(() => {
            window.location.href = "library.php"; // Redirect to the desired page
          }, 1000); // Add a slight delay to ensure reset completes
        } else {
          form.classList.add("was-validated");
        }
      },
      false
    );
  });
})();
