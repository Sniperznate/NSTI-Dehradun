let generatedCaptcha = "";

function generateCaptcha() {
  const chars = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
  generatedCaptcha = "";
  for (let i = 0; i < 6; i++) {
    generatedCaptcha += chars.charAt(Math.floor(Math.random() * chars.length));
  }
  document.getElementById("captchaCode").innerText = generatedCaptcha;
}

function validateCaptcha() {
  const userInput = document.getElementById("captchaInput").value.trim();
  const role = document.getElementById("role").value;

  if (!role) {
    alert("❗ Please select a login role.");
    return false;
  }

  if (userInput.toUpperCase() !== generatedCaptcha) {
    alert("❌ CAPTCHA did not match. Please try again.");
    generateCaptcha();
    return false;
  }

  alert("✅ Login successful as " + role.toUpperCase());
  return true;
}

function togglePassword() {
  const passwordInput = document.getElementById("password");
  const toggleIcon = document.getElementById("toggleIcon");
  const isHidden = passwordInput.type === "password";

  passwordInput.type = isHidden ? "text" : "password";
  toggleIcon.classList.toggle("bi-eye");
  toggleIcon.classList.toggle("bi-eye-slash");
}

function showSignupIfTrainee() {
  const role = document.getElementById("role").value;
  const signupBtn = document.getElementById("signupBtn");
  signupBtn.style.display = role === "trainee" ? "block" : "none";
}

window.onload = generateCaptcha;