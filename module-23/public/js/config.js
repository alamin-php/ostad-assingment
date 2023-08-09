function showLoader() {
    document.getElementById('loader').classList.remove('d-none')
}
function hideLoader() {
    document.getElementById('loader').classList.add('d-none')
}

function successToast(msg) {
    Toastify({
        gravity: "bottom", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        text: msg,
        className: "mb-5",
        style: {
            background: "green",
        }
    }).showToast();
}

function errorToast(msg) {
    Toastify({
        gravity: "bottom", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        text: msg,
        className: "mb-5",
        style: {
            background: "red",
        }
    }).showToast();
}

function ValidateEmail(email)
{
    let checkEmailFormat = /^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/;
    if(email.match(checkEmailFormat)){
        return true;
    }else{
        return false;
    }
}

function ValidateBDPhone(mobile){
    let checkBDPhoneNumber = /^(?:\+?88|0088)?01[15-9]\d{8}$/;
    if(mobile.match(checkBDPhoneNumber)){
        return true;
    }else{
        return false;
    }
}

