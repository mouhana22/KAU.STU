function checkName(){
    var letters = /^[A-Za-z\u0621-\u064A]+$/;
    names = document.getElementById('name');
    if(names.value.match(letters)){
        return true;
    }
    else{
        alert('Please Enter Your Name.\nUse only letters.')
        return false;
    }
}

function checkEmail(){
    var emailRegex = /^\S+@\S+\.\S+$/;
    email = document.getElementById('email');
    if(email.value.match(emailRegex)){
        return true;
    }
    else{
        alert('Please Enter A Valid Email.')
        return false;
    }
}

function checkBox(){
    var valid = false;
    if(document.getElementById('Faculties').checked){
        valid = true;
    }
    else if(document.getElementById('generalSpace').checked){
        valid = true;
    }
    else if(document.getElementById('importantLinks').checked){
        valid = true;
    }
    else{
        alert('Please select at least one section.');
        return false;
    }
}