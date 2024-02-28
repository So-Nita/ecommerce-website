// For fixed top header
const header = document.getElementById('head');
const adverties = document.getElementById('adv-1'); 
window.onscroll = () =>{
    if(window.pageYOffset > (adverties.offsetHeight))
    {
        header.style.position="fixed"; 
        header.style.top = "0"
        header.style.zIndex="1";
        header.style.width="100%"
    }else{
        header.style.position=""; 
        header.style.top = ""
        header.style.zIndex=""
        header.style.width=""
    }
}

// jQuery code to toggle dropdown-menu visibility
$(document).ready(function(){
    $('.navbar-nav .nav-item').hover(function(){
        $(this).find('.dropdown-menu').toggleClass('show');
    });
});


