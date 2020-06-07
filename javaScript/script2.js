const sair = document.querySelector('#sair');
sair.addEventListener('click',() =>{
    sessionStorage.clear();
    window.location.href = "index.html"; 
});



