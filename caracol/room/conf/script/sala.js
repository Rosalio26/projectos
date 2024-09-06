
// alert('working');
let btnHdshow = document.getElementById('show-hide');
let btnHdhidde = document.getElementById('hide-show');
let campHdleft = document.getElementById('left-main-sala');
let campHdright = document.getElementById('rigth-main-sala');

function clickHdshow() {
    btnHdshow.style.display = 'none';
    btnHdhidde.style.display = 'block';
    campHdleft.style.width ='300px';
    campHdright.style.minWidth = '1160px';
}
function clickHdhidde() {
    btnHdhidde.style.display = 'none';
    btnHdshow.style.display ='block';
    campHdleft.style.width = '70px';
    campHdright.style.minWidth = '1360px';
}
