
var btnToggle = document.querySelector('#btn-tgg');
var cntLef = document.querySelector('.cnt-esc-lef');

btnToggle.addEventListener('click', function() {
    cntLef.classList.add('opencnt');
    btnToggle.style.display = 'none';

    cntLef.addEventListener('click', function(e) {
        if(e.target.id == 'fecharcnt'){
            cntLef.classList.remove('opencnt');
            btnToggle.style.display = 'block';
        }
    });
});