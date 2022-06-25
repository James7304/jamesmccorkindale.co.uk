document.addEventListener('click', ()=>{
    if(!document.getElementById('hamburger').matches(':hover')){
        document.getElementById('navbarColor01').classList.add('collapse')
    }
});
document.getElementById('hamburger').addEventListener('click', ()=>{
    if(document.getElementById('navbarColor01').classList.contains('collapse')){
        document.getElementById('navbarColor01').classList.remove('collapse')
    }
    else{
        document.getElementById('navbarColor01').classList.add('collapse');
    }
});