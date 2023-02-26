function acceptTerm() {
    let radio = document.querySelector('input#term');
    let button = document.querySelector('#termBtn');
    let name = document.querySelector('#name');
    let user = document.querySelector('#user');
    let email = document.querySelector('#email');
    let password = document.querySelector('#pass');

    let count = 0;
    let array = [radio.checked ? 1 : 0, name.value.length, user.value.length, email.value.length, password.value.length]
    
    for (item of array) {
        if (item > 0) { count++; }
    }

    if (count === 5) {
        button.classList.remove('disabled');
        button.classList.add('enabled');
        button.disabled = false;
    } else {
        button.classList.remove('enabled');
        button.classList.add('disabled');
        button.disabled = true;
    } 
}