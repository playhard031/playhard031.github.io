let isValidName = true;
let isValidPhone = true;

$(document).ready(function () {

    $('#phone-validation-message').hide();
    $('#name-validation-message').hide();



    nameOnChange();
    phoneOnChange();

    $('#order-form').submit((event) => {
        event.preventDefault();

        phoneValidation();
        nameValidation();

        if (isValidForm()) {
            $('#order-form')[0].submit();
        }

    })

});


nameValidation = () => {
    let name = $('#name').val();

    if (name.length && name.trim().split(' ').length >= 2 && name.trim().split(' ').every((word) => { return word.length >= 2})) {
        $('#name-validation-message').hide();
        isValidName = true;
        isValidForm();
    }
    else {
        $('#name-validation-message').show();
        disableSubmitButtonOnError();
        isValidName = false;
    }
}

nameOnChange = () => {
    $('#name').keyup(() => {
        nameValidation();
    })
}


phoneValidation = () => {

    let contentTyped = $('#phone').val();


    if (libphonenumber.isValidNumber(contentTyped)) {
        let enteredPhoneNumber = libphonenumber.parsePhoneNumberFromString(contentTyped);
        if (enteredPhoneNumber && supportedCountries.includes(enteredPhoneNumber.country)) {
            $('#phone-validation-message').hide();
            isValidPhone = true;
            isValidForm();
        }
        else {
            $('#phone-validation-message').show();
            disableSubmitButtonOnError();
            isValidPhone = false;
        }

    }
    else {

        $('#phone-validation-message').show();
        disableSubmitButtonOnError();
        isValidPhone = false;
    }

}

phoneOnChange = () => {
    $('#phone').keyup(() => {
        phoneValidation();
    })
}


disableSubmitButtonOnError = () => {
    $('#submit-btn').prop('disabled', true);
    $('#submit-btn').addClass('disabled');
}

enableSubmitButton = () => {
    $('#submit-btn').prop('disabled', false);
    $('#submit-btn').removeClass('disabled');
}

isValidForm = () => {
    if (isValidName && isValidPhone) {
        enableSubmitButton();
        return true;
    }
    else {
        disableSubmitButtonOnError();
        return false;
    }
}

