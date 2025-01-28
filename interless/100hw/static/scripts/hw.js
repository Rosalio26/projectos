
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



var btnNavBar = document.querySelector('.btn-menu-navbar');
var navItm = document.querySelector('.nav-cnt-home');
var btnCloseNav = document.querySelector('.btn-close-nav');

btnNavBar.addEventListener('click', function() {
    navItm.classList.add('openNavBar');
    btnNavBar.style.display = 'none';
    

    navItm.addEventListener('click', function(event) {
        if(event.target.id == 'btnCloseNavBar'){
            navItm.classList.remove('openNavBar');
            btnNavBar.style.display = 'block';
        }
    });

});



//Posts Status
function search_user() {
    var find = document.querySelector('#find-friend').value;

    if (find.length >= 1) {//Faz Busca quando tiver um caracter ou mais
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "user/find_new.php?find=" + find, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.querySelector('#result_find').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    } else {
        document.querySelector('#result_find').innerHTML = '';
    }
}


//POST BUTTOn Video && Imagem
function imagemBlockPost() {
    var textareaCam = document.querySelector('#textar-input');
    var uploadImagem = document.querySelector('#upload-img');
    var uploadVideo = document.querySelector('#upload-vid');

    var btnImagem = document.querySelector('#btn-img-post');
    var btnVideo = document.querySelector('#btn-vid-post');
    var btnPost = document.querySelector('#btn-post-post');

    textareaCam.style.display = 'none'; 
    uploadVideo.style.display = 'none';
    uploadImagem.style.display = 'block';

    btnImagem.style.display = 'none';
    btnPost.classList.add('post-class');
    btnVideo.style.display = 'flex';
}

function videoBLockPost() {
        var textareaCam = document.querySelector('#textar-input');
        var uploadImagem = document.querySelector('#upload-img');
        var uploadVideo = document.querySelector('#upload-vid');

        var btnImagem = document.querySelector('#btn-img-post');
        var btnVideo = document.querySelector('#btn-vid-post');
        var btnPost = document.querySelector('#btn-post-post');

        textareaCam.style.display = 'none'; 
        uploadImagem.style.display = 'none';
        uploadVideo.style.display = 'flex';
        
        btnVideo.style.display = 'none';
        btnPost.classList.add('post-class');
        btnImagem.style.display = 'flex';
}

function postBlockPost() {
        var textareaCam = document.querySelector('#textar-input');
        var uploadImagem = document.querySelector('#upload-img');
        var uploadVideo = document.querySelector('#upload-vid');

        var btnImagem = document.querySelector('#btn-img-post');
        var btnVideo = document.querySelector('#btn-vid-post');
        var btnPost = document.querySelector('#btn-post-post');

        textareaCam.style.display = 'block'; 
        uploadImagem.style.display = 'none';
        uploadVideo.style.display = 'none';

        btnVideo.style.display = 'flex';
        btnPost.classList.remove('post-class');
        btnImagem.style.display = 'flex';
}