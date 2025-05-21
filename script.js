// script.js
document.addEventListener("DOMContentLoaded", () => {
  const registerButton = document.querySelector(".btn");
  registerButton.addEventListener("click", () => {
    alert("Redirecting to registration page...");
    window.location.href = "register.php"; // Use actual file later
  });
});
