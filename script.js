let menu= document.querySelector('#menu-btn');
let header= document.querySelector('.header');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
    document.body.classList.toggle('active');
    
}

window.onscroll = () =>{
    if(window.innerWidth < 991){
        menu.classList.remove('fa-times');
    header.classList.remove('active');
    document.body.classList.remove('active');
    }

document.querySelectorAll('section').forEach(sec =>{
    let top= window.scroll;
    let offset= sec.offsetTop;
    let height= sec.offsetHeight;
    let id= sec.attributes('id');

    if(top >= offset && top < offset + height){

    document.querySelectorAll('.header .navbar a').forEach(links => {
        links.classList.remove('active');
        document.querySelector('.header .navbar a[herf*='+ id +']').classList.remove('active') 

    });
};

});

}




