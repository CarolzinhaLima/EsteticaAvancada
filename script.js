const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const resgisterLink = document.querySelector('.resgister-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');


resgisterLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');    
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');    
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');    
});