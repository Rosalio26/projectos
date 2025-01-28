
function nextStep() {
    var personalName = document.querySelector('#personalname').value;
    var email = document.querySelector('#email').value;
    var userName = document.querySelector('#username').value;
    var password = document.querySelector('#password').value;
    var submitForm = document.querySelector('#submitForm');
    submitForm.style.display = 'block';

    if (personalName && email && userName && password) {
        document.querySelector('#personalDate').style.display = 'none';
        document.querySelector('#personalId').style.display = 'block';
    }
}

function backForm() {
    document.querySelector('#personalDate').style.display = 'block';
    document.querySelector('#personalId').style.display = 'none';
}

function validateForm() {
    var personalName = document.querySelector('#personalname').value;
    var email = document.querySelector('#email').value;
    var userName = document.querySelector('#username').value;
    var password = document.querySelector('#password').value;
    var numberAut = document.querySelector('#numberInc').value;

    if (personalName==="" || email==="" || userName==="" || password==="" || numberAut==="") {
        alert("Verifica Os dados e tente novamente");
        return false;
    }
    return true;
}

function copyValue(){
    var username1 = document.querySelector('#username').value;
    document.querySelector('#usernameId').value = username1;
}

// function submitForm() {
//     var personalName = document.querySelector('#personalname').value;
//     var email = document.querySelector('#email').value;
//     var userName = document.querySelector('#username').value;
//     var password = document.querySelector('#password').value;
//     var usernameId = document.querySelector('#usernameId').value;
//     var numberInc = document.querySelector('#numberInc').value;

//     if (personalName && email && userName && password && usernameId && numberInc) {
//         var xhr = new XMLHttpRequest();
//         xhr.open("POST", "save_user.php", true);
//         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//         xhr.onreadystatechange = function() {
//             if (xhr.readyState === 4 && xhr.status === 200) {
//                 window.location.href = "confhw/confReg.php"
//             }
//         };
//         xhr.send("personalName=" + personalName + "&email=" + email + "&userName=" + userName + "&password=" + password + "&usernameId=" + usernameId + "&numberInc=" + numberInc);
//     }
// }