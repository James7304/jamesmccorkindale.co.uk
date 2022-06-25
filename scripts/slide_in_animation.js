window.onscroll = animate;

function animate(){

    const list = document.getElementsByTagName("section");
    var stopAnimations = true;

    for(var i=0; i<list.length; i++){

        if (list[i].Id != "slideup"){
            if(list[i].getBoundingClientRect().top >= 0 && list[i].getBoundingClientRect().top <= (window.innerHeight || document.documentElement.clientHeight)){
                
                list[i].classList.add("slideup");
                list[i].Id = "slideup";

            }
            
            else if(list[i].getBoundingClientRect().top < 0) {
                list[i].Id = "slideup";
            }
            stopAnimations = false;
        }
    }

    if(stopAnimations){
        window.onscroll = null;
    }
}

animate();