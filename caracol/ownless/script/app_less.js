


function btnContent() {
    var myNav = document.querySelector('.cnt-tm-less');
    var mynavBar = document.querySelector('.navBar');

    if(myNav.style.display === "none" || mynavBar.style.backgroundColor === "transparent") {
        myNav.style.display = "block";
        mynavBar.style.backgroundColor = "#0008ff76"
    } else {
        myNav.style.display = "none";
        mynavBar.style.backgroundColor = "transparent"
    }
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content 
function btnContent() {
    document.getElementById("tm-less-program").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.lk-imp-tm')) {
      var dropdowns = document.getElementsByClassName("cnt-tm-less");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }*/