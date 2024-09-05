
// alert('working');
let btnHdshow = document.getElementById('show-hide');
let campHd = document.getElementById('left-main-sala');
let btnHdhidde = document.getElementById('hide-show');

function clickHdshow() {
    btnHdshow.style.display = 'none';
    btnHdhidde.style.display = 'block';
    campHd.style.width ='150px';
}
function clickHdhidde() {
    btnHdhidde.style.display = 'none';
    btnHdshow.style.display ='block';
    campHd.style.width = '50px';
}
