const form = document.getElementById('enquiryform');
const firstName = document.getElementById('first_name');
const lastName = document.getElementById('last_name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const street = document.getElementById('street');
const city = document.getElementById('city');
const state = document.getElementById('state');
const postcode = document.getElementById('postcode');
const subject = document.getElementById('subject');
const products = document.getElementById('products');
const comments = document.getElementById('comments');

form.addEventListener('submit', (e) => {
    var isAllOk;
    isAllOk = checkInputs();
    if (!isAllOk){
        e.preventDefault();
    }
});

function checkInputs(){
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const streetValue = street.value;
    const cityValue = city.value;
    const stateValue = state.value;
    const postcodeValue = postcode.value.trim();
    const subjectValue = subject.value;
    const productsValue = products.value;
    const commentsValue = comments.value;
    var isAllOk = false;
    var firstNameOk;
    var lastNameOk;
    var emailOk;
    var phoneOk;
    var streetOk;
    var cityOk;
    var stateOk;
    var postcodeOk;
    var subjectOk;
    var productsOk;
    var commentsOk;
    var namePattern = /^[a-zA-Z]+$/;
    var phonePattern = /^[0-9]+$/;
    var postcodePattern = /^[0-9]{5}$/;

    if (firstNameValue === ''){
        setErrorFor(firstName, 'First name cannot be blank');
        firstNameOk = false;
    } else {
        if (!namePattern.test(firstNameValue)){
            setErrorFor(firstName, 'First name must only contain alpha characters');
            firstNameOk = false;
        } else {
            setSuccessFor(firstName);
            firstNameOk = true;
        }
    }

    if (lastNameValue === ''){
        setErrorFor(lastName, 'Last name cannot be blank');
        lastNameOk = false;
    } else {
        if (!namePattern.test(lastNameValue)){
            setErrorFor(lastName, 'Last name must only contain alpha characters');
            lastNameOk = false;
        } else {
            setSuccessFor(lastName);
            lastNameOk = true;
        }
    }

    if (emailValue === ''){
        setErrorFor(email, 'Email cannot be blank');
        emailOk = false;
    } else {
        if (!isEmail(emailValue)){
            setErrorFor(email, 'Email is not valid');
            emailOk = false;
        } else {
            setSuccessFor(email);
            emailOk = true;
        }
    }

    if (phoneValue === ''){
        setErrorFor(phone, 'Phone number cannot be blank');
        phoneOk = false;
    } else {
        if (!phonePattern.test(phoneValue)){
            setErrorFor(phone, 'Phone number must only contain numbers');
            phoneOk = false;
        } else {
            setSuccessFor(phone);
            phoneOk = true;
        }
    }

    if (streetValue === ''){
        setErrorFor(street, 'Street address cannot be blank');
        streetOk = false;
    } else {
        setSuccessFor(street);
        streetOk = true;
    }

    if (cityValue === ''){
        setErrorFor(city, 'City cannot be blank');
        cityOk = false;
    } else {
        setSuccessFor(city);
        cityOk = true;
    }

    if (stateValue === ''){
        setErrorFor(state, 'Please choose a state');
        stateOk = false;
    } else {
        setSuccessFor(state);
        stateOk = true;
    }

    if (postcodeValue === ''){
        setErrorFor(postcode, 'Postcode cannot be blank');
        postcodeOk = false;
    } else {
        if (!postcodePattern.test(postcodeValue)){
            setErrorFor(postcode, 'Postcode is not valid');
            postcodeOk = false;
        } else {
            setSuccessFor(postcode);
            postcodeOk = true;
        }
    }

    if (subjectValue === ''){
        setErrorFor(subject, 'Subject cannot be blank');
        subjectOk = false;
    } else {
        setSuccessFor(subject);
        subjectOk = true;
    }

    if (productsValue === ''){
        setErrorFor(products, 'Please choose a product to enquire');
        productsOk = false;
    } else {
        setSuccessFor(products);
        productsOk = true;
    }

    if (commentsValue === ''){
        setErrorFor(comments, 'Please state the matter you wish to enquire about the product');
        commentsOk = false;
    } else {
        setSuccessFor(comments);
        commentsOk = true;
    }

    if (firstNameOk && lastNameOk && emailOk && phoneOk && streetOk && cityOk && stateOk && postcodeOk && subjectOk && productsOk && commentsOk){
        isAllOk = true;
        return isAllOk;
    } else {
        isAllOk = false;
        return isAllOk;
    }
}

function setErrorFor(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;

    formControl.className = 'form-control error';

}

function setSuccessFor(input){
    const formControl = input.parentElement;

    formControl.className = 'form-control success';
}

function isEmail(email){
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}