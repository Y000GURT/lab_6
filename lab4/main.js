let openModal = document.querySelector('.openModal'),
    modal = document.querySelector('.modal'),
    closeModal = document.querySelector('.closeModal'),
    closeModalSign = document.querySelector('.closeModalSign'),
    signIn = document.querySelector('.signIn'),
    modalSign = document.querySelector('.modalSign'),
    acc = document.querySelectorAll('.accordion'),
    i;

openModal.addEventListener('click', function() {
    modal.style.display = 'block';
});
closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
})
closeModalSign.addEventListener('click', function() {
    modal.style.display = 'none';
    modalSign.style.display = 'none';
})
signIn.addEventListener('click', function(){
    modal.style.display = 'none';
    modalSign.style.display = 'block';
})
console.log("sdgdag");


for(i=0; i<acc.length; i++){
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
