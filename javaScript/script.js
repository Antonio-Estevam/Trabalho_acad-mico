const $menu = document.querySelector('.menu');
const $btnMenuOpen = document.querySelector('.btnMenu_open');
const $btnMenuClose = document.querySelector('.btnMenu_close');
const $btnDownload = document.querySelector('#bt_download');
const $menu_item_action = document.getElementsByClassName('menu-item-action');

$btnMenuOpen.addEventListener('click',()=>{ 
    $menu.classList.add('menu_open');
});

$btnMenuClose.addEventListener('click',()=>{
    $menu.classList.remove('menu_open');
});

$btnDownload.addEventListener('click',()=>{
    alert("No momento essa opção não esta disponiver!!");
});
    //Esconder menu apos clicado 
for(let i=0; i < $menu_item_action.length; i++){
    $menu_item_action[i].addEventListener('click',()=>{
        $menu.classList.remove('menu_open');
    });
    
}