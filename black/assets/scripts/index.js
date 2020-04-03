$(document).ready(() => {

    


   
    $('#formDiscountPriceValue').text(`${getDiscountPrice()}${getCurrency()}`);    
    $('#option1').append(`${getDiscountPrice()}${getCurrency()}`);
    
    $('#phone').val('+387');

})

getRegularPrice = () => {
    return regularPrice;
}

getDiscountPrice = () => {
    return discountPrice;
}

getCurrency = () => {
    return currency;
}