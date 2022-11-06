// select all form inputs

var prodname = document.forms['Formaddproduct']['pname'];
var prodprice = document.forms['Formaddproduct']['pprice'];
var prodcat = document.forms['Formaddproduct']['pcat'];
var prodbrand = document.forms['Formaddproduct']['pbrand'];
var prodescription = document.forms['Formaddproduct']['pdesc'];
var prodimage = document.forms['Formaddproduct']['pimg'];
var prodkeyword = document.forms['Formaddproduct']['pkeyword']; 

// select all error display elements

var prnameError = document.getElementById('prnameError');
var priceError = document.getElementById('priceError');
var catError = document.getElementById('catError');
var brandError = document.getElementById('brandError');
var descriptionError = document.getElementById('descriptionError');
var imageError = document.getElementById('imageError');
var keywordError = document.getElementById('keywordError');

// setting all event listeners

prname.addEventListener('blur', prnameVerify, true);
price.addEventListener('blur', priceVerify, true);
cat.addEventListener('blur', catVerify, true);
brand.addEventListener('blur', brandVerify, true);
description.addEventListener('blur', descriptionVerify, true);
image.addEventListener('blur', imageVerify, true);
keyword.addEventListener('blur', keywordVerify, true);

function validateForm(){

    if (prodname.value == ""){
        prnameError.innerHTML = "<span style='color: red;'> Product Name is required </span>";
       
        prnname.focus();
        return false;
    }
    
    if (prodprice.value == ""){
        priceError.innerHTML = "<span style='color: red;'>product price is required </span>";
        price.focus();
        return (false);
    }
      
    if (prodcat.value == ""){
        catError.innerHTML = "<span style='color: red;'> please select product's category </span>";
        cat.focus();
        return false;
    }


    if (brand.value == ""){
        brandError.innerHTMl= "<span style='color: red;'> please select product's brand </span>";
        brand.focus();
        return false; 
    }

    if (prodescription.value == ""){
        descriptionError.innerHTML = "<span style='color: red;'> please enter description of the product added </span>"; 
        description.focus();
        return false;
    }

    if (prodimage.value.length > 15){
        imageError.innerHTML = "<span style='color: red;'> please upload the products' image</span>";
        image.focus();
        return false;
    }

    if (prodkeyword.value.length > 15){
        keywordError.innerHTML = "<span style='color: red;'> products' keyword is required </span>";
        keyword.focus();
        return false;
    }

}

