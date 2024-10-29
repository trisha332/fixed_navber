///  /=============== LOGIN TOGGLE ===============/
const login = document.getElementById('login'),
      loginBtn = document.getElementById('login-btn'),
      loginClose = document.getElementById('login-close')

/* Show login */
loginBtn.addEventListener('click', () => {
   login.classList.add('show-login')
})

/* Hide login */
loginClose.addEventListener('click', () => {
   login.classList.remove('show-login')
})
// /===========/





