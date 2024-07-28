
function getpage(a) {
  $.get(document.getElementById(a).getAttribute('data'), function(data){ paginas = data;});
}


/*
===========Programacao===========
=================================*/

$("#btn-program").click(function() {
  $("#main").load("../less/aulas/programacao/programacao-less.php");
});



/*
var btnText = document.getElementById("test").addEventListener("click", ev => {
  ev.preventDefault();
});
url = '/shmD9/show';

function btnContent() {

  var areaHeader = document.querySelector(".header");
  var areaBody = document.querySelector(".home-less");

  areaHeader.style.background = "red";*/
  /*if (areaHeader.style.background === "#555" || areaBody.style.background === "#555") {
    areaHeader.style.background = "red";
  } else {
    areaHeader.style.background = "yellow"
  }*/