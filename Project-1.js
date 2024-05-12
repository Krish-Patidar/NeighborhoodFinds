// Login form js start

function Validation() {
let m = document.myformm.text.value;

if(m.length !=10){
    document.getElementById('fmmobileno').innerHTML='**Please enter the 10 digit Mobile No.';
    return false;
}
else if(isNaN(m)){
    document.getElementById('fmmobileno').innerHTML='**Enter only Mobile Number';
    return false;
}
else if(!(m.startsWith("6") || m.startsWith("7") || m.startsWith("8") || m.startsWith("9") )){
    document.getElementById('fmmobileno').innerHTML='**Please enter the valid Mobile Number';
    return false;
}
else{
    $('#myFormm').on('submit', function (h) {
        $('#myModall').modal('show');
        h.preventDefault();
    });
}

}


// Login form js end

// Register form start

function Validationn(){
    $('#myFormm').on('submit', function (h) {
        $('#myModall').modal('show');
        h.preventDefault();
    });
}

// Register form end
