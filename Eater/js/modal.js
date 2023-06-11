var modalBtn = document.querySelector('.modal-btn');
var modalBg = document.querySelector('.modal-bg');
var modalClose = document.querySelector('.modal-close');
var modalCloseSubmit = document.querySelector('.modal-button');


modalBtn.addEventListener('click', function(){
    modalBg.classList.add('bg-active');
});
modalClose.addEventListener('click', function(){
    modalBg.classList.remove('bg-active');
});
modalCloseSubmit.addEventListener('click', function(){
    modalBg.classList.remove('bg-active');
});