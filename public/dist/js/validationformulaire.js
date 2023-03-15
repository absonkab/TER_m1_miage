/* get form elements
const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const password = document.getElementById('password');
const passwordConfirm = document.getElementById('password_confirmation');


// add eventlistener on each form name element
nom.addEventListener('keyup', e => {
    e.preventDefault();
    // get name value
    let nomValue = nom.value.trim();
    //verify
    verifName(nomValue);
});

// add eventlistener on each form firstname element
prenom.addEventListener('keyup', e => {
    e.preventDefault();
    let prenomValue = prenom.value.trim();
    verifFirstName(prenomValue);
});

// add eventlistener on each form email element
email.addEventListener('keyup', e => {
    e.preventDefault();
    let emailValue = email.value.trim();
    verifEmail(emailValue);
});

// add eventlistener on each form password element
password.addEventListener('keyup', e => {
    e.preventDefault();
    let passwordValue = password.value.trim();
    verifPassword(passwordValue);
});

// add eventlistener on each form password confirm element
passwordConfirm.addEventListener('keyup', e => {
    e.preventDefault();
    let passwordConfirmValue = passwordConfirm.value.trim();
    let passwordValue = password.value.trim();
    verifPasswordConfirm(passwordConfirmValue, passwordValue);
});

form.addEventListener('submit', e => {
    e.preventDefault();
    validateInputs();
});

// 
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

//
const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const isValidnom = nom => {
    const re = /^[A-za-z]{3,20}$/ ;
    return re.test(String(nom));
}

const isValidprenom = prenom => {
    const re = /^[A-za-z]{3,20}$/ ;
    return re.test(String(prenom));
}


const validateInputs = () => {

};

const verifName = (nomValue) =>  {
    if(nomValue === '') {
        setError(nom, 'Le nom est obligatoire');
    } else if (!isValidnom(nomValue)) {
        setError(nom, 'Veuillez utiliser que des lettres/minimum 3 lettres');
    } else {
        setSuccess(nom);
    }
};

const verifFirstName = (prenomValue) =>  {
    if(prenomValue === '') {
        setError(prenom, 'Le prénom est obligatoire');
    } else if (!isValidprenom(prenomValue)) {
        setError(prenom, 'Veuillez utiliser que des lettres/minimum 3 lettres');
    } else {
        setSuccess(prenom);
    }
};

const verifEmail = (emailValue) =>  {
    if(emailValue === '') {
        setError(email, 'Adresse e-mail est obligatoire');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Saisissez un e-mail valide');
    } else {
        setSuccess(email);
    }
};

const verifPassword = (passwordValue) => {

    if(passwordValue === '') {
        setError(password, 'Le mot de passe est obligatoire');
    } else if (passwordValue.length < 6 ) {
        setError(password, 'Le mot de passe doit comporter au moins 6 caractères');
       // document.getElementById('submit').disabled = true;
    } else {
        setSuccess(password);
      //  document.getElementById('submit').disabled = false;
    }
};

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
*/