const signUpBtn = document.getElementById('signUpBtn');
const signInBtn = document.getElementById('signInBtn');
const container = document.querySelector('.container');

signUpBtn.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInBtn.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});

// Basic validation
document.getElementById('signInForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const username = document.getElementById('signInUsername').value;
    const password = document.getElementById('signInPassword').value;
    const errorMsg = document.getElementById('signInError');

    if (username === "" || password === "") {
        errorMsg.textContent = "Please fill in all fields";
    } else {
        errorMsg.textContent = "";
        alert("Sign In Successful");
    }
});

document.getElementById('signUpForm').addEventListener('submit', (e) => {
    e.preventDefault();
    const username = document.getElementById('signUpUsername').value;
    const email = document.getElementById('signUpEmail').value;
    const password = document.getElementById('signUpPassword').value;
    const errorMsg = document.getElementById('signUpError');

    if (username === "" || email === "" || password === "") {
        errorMsg.textContent = "Please fill in all fields";
    } else if (!validateEmail(email)) {
        errorMsg.textContent = "Please enter a valid email address";
    } else {
        errorMsg.textContent = "";
        alert("Sign Up Successful");
    }
});

function validateEmail(email) {
    const re = /^(([^<>()\.,;:\s@"]+(\.[^<>()\.,;:\s@"]+)*)|(".+"))@(([^<>()[\.,;:\s@"]+\.)+[^<>()[\.,;:\s@"]{2,})$/i;
    return re.test(String(email).toLowerCase());
}