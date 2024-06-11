
function btnmenuHamb() {
    var myNav = document.querySelector('.itm-content');
    var mynavBar = document.querySelector('.navBar');

    if(myNav.style.display === "none" || mynavBar.style.backgroundColor === "transparent") {
        myNav.style.display = "block";
        mynavBar.style.backgroundColor = "blue"
    } else {
        myNav.style.display = "none";
        mynavBar.style.backgroundColor = "transparent"
    }
}