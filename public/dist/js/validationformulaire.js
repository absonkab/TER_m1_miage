//get form elements
const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const date = document.getElementById('date');
const password = document.getElementById('password');
const passwordConfirm = document.getElementById('password_confirmation');
const submitButton = document.getElementById('submit');

//get all form inputs in a variable
const inputs = document.querySelectorAll('input');

// add eventlistener on form name element
nom.addEventListener('keyup', e => {
    e.preventDefault();
    // get name value
    let nomValue = nom.value.trim();
    //verify
    verifName(nomValue);
});

// add eventlistener on form firstname element
prenom.addEventListener('keyup', e => {
    e.preventDefault();
    let prenomValue = prenom.value.trim();
    verifFirstName(prenomValue);
});

// add eventlistener on form email element
email.addEventListener('keyup', e => {
    e.preventDefault();
    let emailValue = email.value.trim();
    verifEmail(emailValue);
});

// add eventlistener on form date element
date.addEventListener('input', e => {
    e.preventDefault();
    let dateValue = date.value;
    isvalidDate(dateValue);
});
date.addEventListener('change', e => {
    e.preventDefault();
    let dateValue = date.value;
    isvalidDate(dateValue);
});


// add eventlistener on form password element
password.addEventListener('keyup', e => {
    e.preventDefault();
    let passwordConfirmValue = passwordConfirm.value.trim();
    let passwordValue = password.value.trim();
    verifPassword(passwordValue);
    verifPasswordConfirm(passwordConfirmValue, passwordValue);
});

// add eventlistener on form password confirm element
passwordConfirm.addEventListener('keyup', e => {
    e.preventDefault();
    let passwordConfirmValue = passwordConfirm.value.trim();
    let passwordValue = password.value.trim();
    verifPassword(passwordValue);
    verifPasswordConfirm(passwordConfirmValue, passwordValue);
});

// return error message
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

// return success
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

// define what string is a valid email with regex
const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

//define what is valid name and firstname
const isValidnom = nom => {
    const re = /^[A-za-z]{3,20}$/ ;
    return re.test(String(nom));
}

const isValidprenom = prenom => {
    const re = /^[A-za-z]{3,20}$/ ;
    return re.test(String(prenom));
}

//verify if date entered is valid
const isvalidDate = (enter_date) => {
    if ( !isNaN(Date.parse(enter_date))) {
    
        // date is valid
        setSuccess(date);
    } else {
        //Date is not valid
        setError(date, 'Date incorrecte');
    }
};

// verify if name respects conditions
const verifName = (nomValue) =>  {
    if(nomValue === '') {
        setError(nom, 'Le nom est obligatoire');
    } else if (!isValidnom(nomValue)) {
        setError(nom, 'Veuillez utiliser que des lettres/minimum 3 lettres');
    } else {
        setSuccess(nom);
        controlSubmitButton(nom);
    }
};

// verify if firstname respects conditions
const verifFirstName = (prenomValue) =>  {
    if(prenomValue === '') {
        setError(prenom, 'Le prénom est obligatoire');
    } else if (!isValidprenom(prenomValue)) {
        setError(prenom, 'Veuillez utiliser que des lettres/minimum 3 lettres');
    } else {
        setSuccess(prenom);
    }
};

// verify if email respects conditions
const verifEmail = (emailValue) =>  {
    if(emailValue === '') {
        setError(email, 'Adresse e-mail est obligatoire');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Saisissez un e-mail valide');
    } else {
        setSuccess(email);
    }
};

// verify if password respects conditions
const verifPassword = (passwordValue) => {

    if(passwordValue === '') {
        setError(password, 'Le mot de passe est obligatoire');
    } else if (passwordValue.length < 6 ) {
        setError(password, 'Le mot de passe doit comporter au moins 6 caractères');
    } else {
        setSuccess(password);
    }
};

// verify if password is confirmed
const verifPasswordConfirm = (passwordConfirmValue, passwordValue) =>  {
    if(passwordConfirmValue === '') {
        setError(passwordConfirm, 'Veuillez confirmer votre mot de passe');
    } 

    if(passwordConfirmValue.length < 6 ) {
        setError(passwordConfirm, 'Le mot de passe doit comporter au moins 6 caractères');
      //  document.getElementById('submit').disabled = true;
    }

    else if (passwordConfirmValue !== passwordValue) {
        setError(passwordConfirm, "Les deux mots de passe ne se correspondent pas");
    }
    
    else {
        setSuccess(passwordConfirm);
    }
}

// check if all fields are correctly entered before enable submit button
function controlSubmitButton() {
    const isDisabled = Array.from(inputs).some(input => !input.parentElement.classList.contains('success')); //
    submitButton.disabled = isDisabled;
}

//add eventlister to all inputs for controlling submit button
inputs.forEach(input => {
    input.addEventListener('keyup', controlSubmitButton);
});
