/* Format the credit card number in 4 digit for 16 digit card */

let ccNumber = document.getElementById('cc-number');
ccNumber.addEventListener('keyup', function(e) {
  let num = ccNumber.value;

  let newValue = "";
  num = num.replace(/\s/g, "");
  for (var i = 0; i < num.length; i++) {
    if (i % 4 == 0 && i > 0) newValue = newValue.concat(" "); // add space every 4 digit
    newValue = newValue.concat(num[i]); // Reset to the new value
    ccNumber.value = newValue;  // Assign ccNumber to the new value
  }
});

/* Format the date in MM/YY */

let eDate = document.getElementById('cc-expiration');
eDate.addEventListener('keyup', function(e) {
  if (e.which !== 8) {
    var numChars = e.target.value.length;
    if (numChars == 2) {  // Add '/' every 2 characters
      var thisVal = e.target.value;
      thisVal += '/';
      e.target.value = thisVal;
      console.Log(thisVal.length);
    }
  }
});

/* Validating the form */

(() => {
  ("use strict");

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");
  const form = document.getElementById("paymentForm");

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

  // Credit Card Number Validation
  const ccNumber = document.getElementById("cc-number");
  ccNumber.addEventListener("input", function () {
    // CARD NUMBER FOMART
    const regex =
      /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|6(?:011|5[0-9]{2})[0-9]{12}|(?:2131|1800|35\d{3})\d{11})$/;
    const isValid = regex.test(ccNumber.value.replace(/\s/g, ""));
    toggleValidation(ccNumber, isValid);
    ccNumber.setCustomValidity(isValid ? "" : "Invalid credit card number");
  });

  // CVV Validation
  const cvv = document.getElementById("cc-cvv");
  cvv.addEventListener("input", function () {
    const regex = /^[0-9]{3,4}$/; // CVV FORMAT
    const isValid = regex.test(cvv.value);
    toggleValidation(cvv, isValid);
    cvv.setCustomValidity(isValid ? "" : "Invalid CVV");
  });

  // Expiration Date Validation
  const expDate = document.getElementById("cc-expiration");
  expDate.addEventListener("input", function () {
    const regex = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/; // DATE FORMAT
    const isValid = regex.test(expDate.value);
    toggleValidation(expDate, isValid);
    expDate.setCustomValidity(
      isValid ? "" : "Invalid expiration date. Use MM/YY format"
    );
  });

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
            document.getElementById("modal-confirm")
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
    togglePaymentDetails();
  });
})();

/* If the user selects ABA PAY or APPLE PAY, disable the form */

document.addEventListener("DOMContentLoaded", function () {
  const paymentDetails = document.getElementById("paymentDetails");
  const saveCard = document.getElementById("saveCard");
  const creditPay = document.getElementById("credit");
  const abaPay = document.getElementById("abapay");
  const applePay = document.getElementById("applepay");

  // Initially show the payment details for Credit/Debit
  paymentDetails.style.display = "flex";
  saveCard.style.display = "block";

  // Function to show or hide the payment details
  function togglePaymentDetails() {
    if (creditPay.checked) {
      paymentDetails.style.display = "flex";
      saveCard.style.display = "block";
      document.getElementById("cc-number").setAttribute("required", "required");
      document.getElementById("cc-name").setAttribute("required", "required");
      document
        .getElementById("cc-expiration")
        .setAttribute("required", "required");
      document.getElementById("cc-cvv").setAttribute("required", "required");
    } else if (abaPay.checked || applePay.checked) {
      paymentDetails.style.display = "none";
      saveCard.style.display = "none";
      document.getElementById("cc-number").removeAttribute("required");
      document.getElementById("cc-name").removeAttribute("required");
      document.getElementById("cc-expiration").removeAttribute("required");
      document.getElementById("cc-cvv").removeAttribute("required");
    }
  }

  // Add event listeners to the radio buttons and their labels
  const paymentMethods = document.querySelectorAll(
    'input[name="paymentMethod"]'
  );
  paymentMethods.forEach((method) => {
    method.addEventListener("change", togglePaymentDetails);
    const label = document.querySelector(`label[for="${method.id}"]`);
    label.addEventListener("click", function () {
      method.checked = true;
      togglePaymentDetails();
    });
  });

  // Initial call to set the correct display state
  togglePaymentDetails();
});
