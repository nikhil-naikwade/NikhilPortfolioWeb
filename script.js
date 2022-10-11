// window.onscroll = function() {myFunction()};

// var navbar = document.getElementById("navbar");
// var sticky = navbar.offsetTop;

// function myFunction() {
//   if (window.pageYOffset >= sticky) {
//     navbar.classList.add("sticky")
//   } else {
//     navbar.classList.remove("sticky");
//   }
// }

$(document).ready(function(){
    $(window).scroll(function(){
        if (this.scrollY > 30){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        } 
    });
 
    /* Slide up */
    // $('.scroll-up').click(function(){
    //     $('html').animate({scrollTop: 0});
    //     $('html').css("scrollBehavior", "auto");
    // });
    // $('.navbar .menu li a').click(function(){
    //     $('html').css("scrollBehavior", "smooth");
    // });

    // /* Menu Toggle */
    // $('.menu-btn').click(function(){
    //     $('.navbar .menu').toggleClass("active");
    //     $('.menu-btn i').toggleClass("active");
    // });
});
