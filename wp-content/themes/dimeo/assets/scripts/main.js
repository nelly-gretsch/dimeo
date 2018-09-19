//@prepros-append bootstrap.bundle.min.js
//@prepros-append smoothscroll.js

window.onscroll = function changeNav() {
    var navBar = document.getElementById('static')
    var scrollPosY = window.pageYOffset | document.body.scrollTop;

    if (scrollPosY >= 150) {
        navBar.className = ('static is-scrolling');
    } else if (scrollPosY <= 150) {
        navBar.className = ('static');
    }
}