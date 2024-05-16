const token = $('meta[name="csrf-token"]').attr('content');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': token
    }
})

$(document).ready(function(){

    var location = window.location.href;

    $('#registerBtn').click(register)
    $('#loginBtn').click(login)
    $('#contactBtn').click(contact)
    $('.addToCart').click(addToCart)
    $('#minusQuantity').click(minusQuantity)
    $('#plusQuantity').click(plusQuantity)
    $('.deleteBtn').click(deleteProduct)
    $('#onSale').change(hideShowElements)
    $('#discountDiv').hide()
    $('#dateFromDiv').hide()
    $('#dateToDiv').hide()
    $('#date').change(filterActivitiesByDate)
    if(location == baseUrl+"/cart"){
        showProductsCart();
        showBoughtCart();
    }

    document.getElementById('insertCategoryBtn').onclick = function(){insertChoosen('#insertCategory', '#insertCategoryError', '/category/insert')}
    document.getElementById('deleteCategoryBtn').onclick = function(){deleteChoosen('#deleteCategoryOpt', '#deleteCategoryError', 'Choose category for delete.', '/category/delete')}
    document.getElementById('updateCategoryBtn').onclick = function(){updateChoosen('#updateCategoryOpt', '#updateCategory', '#updateCategoryError1', 'Choose category for update.', '#updateCategoryError2', '/category/update')}

    document.getElementById('insertBrandBtn').onclick = function(){insertChoosen('#insertBrand', '#insertBrandError', '/brand/insert')}
    document.getElementById('deleteBrandBtn').onclick = function(){deleteChoosen('#deleteBrandOpt', '#deleteBrandError', 'Choose brand for delete.', '/brand/delete')}
    document.getElementById('updateBrandBtn').onclick = function(){updateChoosen('#updateBrandOpt', '#updateBrand', '#updateBrandError1', 'Choose brand for update.', '#updateBrandError2', '/brand/update')}

    document.getElementById('insertFitBtn').onclick = function(){insertChoosen('#insertFit', '#insertFitError', '/fit/insert')}
    document.getElementById('deleteFitBtn').onclick = function(){deleteChoosen('#deleteFitOpt', '#deleteFitError', 'Choose fit for delete.', '/fit/delete')}
    document.getElementById('updateFitBtn').onclick = function(){updateChoosen('#updateFitOpt', '#updateFit', '#updateFitError1', 'Choose fit for update.', '#updateFitError2', '/fit/update')}
})

function filterActivitiesByDate(){


    let choosenDate = $('#date').val();

    $.ajax({
        url: baseUrl + "/filterActivities",
        method: "GET",
        data: {

            date : choosenDate
        },
        success: function(data){
            showFilteredActivities(data);
        },
        error: function(xhr, err, status){
            if(xhr.status == 400){
                alert(xhr.responseJSON);
            }
        }
    })
}

function showFilteredActivities(data){
    let html = '';
    data.forEach(d => {
        html += `<tr>
                        <th scope="row">${d.user_id }</th>
                        <td>${d.action }</td>
                        <td>${d.date }</td>
                   </tr>`
    });

    $("#tableBody").html(html);
}

function hideShowElements(){

    let answer = $('#onSale').val()

    if(answer == 'yes'){

        $('#discountDiv').show()
        $('#dateFromDiv').show()
        $('#dateToDiv').show()

    }else if(answer == 'no' || answer == '0'){

        $('#discountDiv').hide()
        $('#dateFromDiv').hide()
        $('#dateToDiv').hide()

    }
}

function updateChoosen(selectOpt, fieldName, errField1, errMsg1, errField2, url){

    var validate = true;

    let id = $(selectOpt).val()

    let name = $(fieldName).val()
    let regName = /^[A-Z][a-z]{3,15}(\s[A-Z][a-z]{3,15})*$/

    if(id == '0'){

        $(errField1).html(errMsg1);
        validate = false;
    } else{
        $(errField1).html('');

    }

    if (name == '') {

        $(errField2).html('Name is required.');
        validate = false;

    } else if (!regName.test(name)) {

        $(errField2).html('Name must start with a capital letter!');
        validate = false;

    } else {
        $(errField2).html('')
    }

    if(validate){

        $.ajax({
            url: baseUrl+url,
            method: 'PUT',
            data: {
                id: id,
                name: name
            },
            success: function(data){
                alert(data)
                window.location.reload()
            },
            error:function(xhr, err, status){
                if(xhr.status = 400){
                    alert(xhr.responseJSON.errorMsg)
                }
            }
        })
    }
}

function deleteChoosen(selectOpt, errField, errMsg, url){

    var validate = true;

    let id = $(selectOpt).val()

    if(id == '0'){

        $(errField).html(errMsg);
        validate = false;
    } else{
        $(errField).html('');

    }

    if(validate){

        $.ajax({
            url: baseUrl+url,
            method: 'DELETE',
            data: {
                id: id
            },
            success: function(data){
                alert(data)
                window.location.reload()
            },
            error:function(xhr, err, status){
                if(xhr.status = 400){
                    alert(xhr.responseJSON.errorMsg)
                }
            }
        })
    }
}

function insertChoosen(nameField, errField, url){

    var validate = true;

    let name = $(nameField).val();
    let regName = /^[A-Z][a-z]{3,15}(\s[A-Z][a-z]{3,15})*$/

    if (name == '') {

        $(errField).html('Name is required.');
        validate = false;

    } else if (!regName.test(name)) {

        $(errField).html('Name must start with a capital letter!');
        validate = false;

    } else {
        $(errField).html('')
    }

    if(validate){

        $.ajax({
            url: baseUrl+url,
            method: 'POST',
            data: {
                name: name
            },
            success: function(data){
                alert(data)
                window.location.reload()
            },
            error:function(xhr, err, status){
                if(xhr.status = 400){
                    alert(xhr.responseJSON.errorMsg)
                }
            }
        })
    }
}

function deleteProduct(){

    let id = $(this).data('id')

    $.ajax({
        url : baseUrl+'/product/delete',
        method : 'DELETE',
        data : {
            id : id
        },
        success: function(data){
            alert(data)
            window.location.reload()
        },
        error:function(xhr, err, status){
            if(xhr.status = 400){
                alert(xhr.responseJSON.errorMsg)
            }
        }
    })
}

function showProductsCart(){

    $.ajax({
        url: baseUrl + "/showCart",
        method: "GET",
        type: "json",
        success: function(data){
            if(data.length > 0){
                //console.log(data)
                showCart(data);
            }
            else {
                $("#productsCart").html("<div class='d-flex align-items-center justify-content-center' id='emptyCart'><h1>Your cart is empty</h1></div>");
            }
        },
        error: function(xhr, err, status){
            console.log(status);
        }
    })
}

function showCart(data){
    let html = "";

    let currentDate = new Date($.now());
    let month = currentDate.getMonth()+1
    let datetime = currentDate.getFullYear()+'-'+month+'-'+currentDate.getDate()


    data.forEach(element => {

        let dateFromStart = new Date(element.dateFrom)
        let dateFromMonth = dateFromStart.getMonth()+1
        let dateFromEnd = dateFromStart.getFullYear()+'-'+dateFromMonth+'-'+dateFromStart.getDate();
        let dateToStart = new Date(element.dateTo)
        let dateToMonth = dateToStart.getMonth()+1
        let dateToEnd = dateToStart.getFullYear()+'-'+dateToMonth+'-'+dateToStart.getDate();

        html += `<div class="row mt-5">
                       <div class="col-lg-4">
                           <div class="card">
                               <img class="card-img img-fluid" src="assets/images/${element.image}" alt="${element.prodName}">
                           </div>
                       </div>
                       <div class="col-lg-8">
                           <div class="card border-0">
                               <div class="card-body">
                                    <h3>"${element.prodName}"</h3>
                                    <ul class="list-inline mt-3">
                                        <li class="list-inline-item">
                                            <h6 class="mt-3">Brand:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong> ${element.brand} </strong></p>
                                        </li>
                                    </ul>
                                    <ul class="list-inline mt-3">
                                        <li class="list-inline-item">
                                            <h6>Size you picked:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong> ${element.size} </strong></p>
                                        </li>
                                    </ul>`
                                if(element.dateFrom != null && element.dateTo != null){
                                    if(datetime >= dateFromEnd && datetime <= dateToEnd){
                                        html += `<p class="text-muted mt-3 mb-3 text-danger">$${element.newPrice} &nbsp; x &nbsp; ${element.quantity} &nbsp; = &nbsp; $${element.newPrice * element.quantity}.00</p>`
                                    }
                                }else{

                                    html += `<p class="text-muted mt-3 mb-3">$${element.price} &nbsp; x &nbsp; ${element.quantity} &nbsp; = &nbsp; $${element.price * element.quantity}.00</p>`

                                }
                                    html += `<button type="submit" class="btn btn-lg float-right mt-5 removeCart border border-dark" data-idproductsize="${element.prodSizeId}" name="removeCart">Remove</button>
                                    <button type="button" class="btn btn-lg float-right mt-5 mr-2 buy border border-dark" data-idcart="${element.cartId}" data-idproductsize="${element.prodSizeId}" >Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>`
    })

    $("#productsCart").html(html);
    $(".removeCart").click(removeFromCart);
    $(".buy").click(buyProduct);
}

function removeFromCart(){

    let id = $(this).data('idproductsize')

    $.ajax({
        url: baseUrl + "/cart/delete",
        method: "DELETE",
        data: {
            id : id
        },
        success: function(data){
            alert("You have successfully removed product from cart!");
            if(data.length > 0){
                showCart(data);
                showBoughtCart();
            }
            else {
                $("#productsCart").html("<div class='d-flex align-items-center justify-content-center' id='emptyCart'><h1>Your cart is empty</h1></div>");
                showBoughtCart();
            }
        },
        error: function(xhr, err, status){
            console.log(status);
        }
    })
}

function buyProduct(){

    let id = $(this).data('idcart')
    let idProductSize = $(this).data('idproductsize')

    $.ajax({
        url: baseUrl + "/cart/buy",
        method: "POST",
        data: {
            id : id,
            product_size_id : idProductSize,
            _token : token
        },
        success: function(data){
            alert("We are thankful for You ordering!");
            if(data.length > 0){
                showCart(data);
                showBoughtCart();
            }
            else {
                $("#productsCart").html("<div class='d-flex align-items-center justify-content-center' id='emptyCart'><h1>Your cart is empty</h1></div>");
                showBoughtCart();
            }
        },
        error: function(xhr, err, status){
            console.log(status);
        }
    })
}

function showBoughtCart(){

    $.ajax({
        url: baseUrl + "/cart/bought",
        method: "GET",
        type: "json",
        success: function(data){
            if(data.length > 0){
                showBought(data);
            }
            else {
                $("#bought").html("");
            }
        },
        error: function(xhr, err, status){
            console.log(status);
        }
    })
}

function showBought(data){

    let html = '';
    html += `<div class="row mt-5 border-top"><div class="col-lg-12 text-center mt-5"><h3>Recently bought</h3></div></div>
             <div class="row mt-5 d-flex justify-content-evenly">`

    data.forEach(element => {
        html += `<div class="col-lg-4">
                    <img class="img-fluid" alt="${element.prodName}" src="assets/images/${element.image}"/>
                    <h3 class="mt-3">"${element.prodName}"</h3>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6 class="mt-3">Price
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong> $${element.price} </strong></p>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6 class="mt-3">Brand
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong> ${element.brand} </strong></p>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h6 class="mt-3">Size
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted"><strong> ${element.size} </strong></p>
                        </li>
                    </ul>
                 </div>`
    })

    html += `</div>`;
    $("#bought").html(html);
}

function plusQuantity(){

    let quantity = parseInt($('#quantity').val());
    let newQuantity = quantity+1;
    $('#quantity').val(newQuantity)

}

function minusQuantity(operator){

    let quantity = $('#quantity').val();
    let newQuantity = quantity-1;
    $('#quantity').val(newQuantity)

    if(newQuantity <= 0){
        $('#minusQuantity').attr('disabled', 'disabled')
    }else{
        $('#minusQuantity').removeAttr('disabled')
    }
}

function addToCart(){

    var validate = true;

    let idProduct = $(this).data('id');
    let idSize = $('#sizesProduct').val();
    let quantity = $('#quantity').val();

    if(idSize == '0'){

        $('#sizesProductError').html('You must pick a size!');
        validate = false;

    }else{
        $('#sizesProductError').html('')
    }

    if(quantity == '0'){

        $('#addToCartError').html('Quantity must be higher than 0!')
        $('#addToCartError').addClass('text-danger')
        $('#addToCartError').removeClass('text-success')
        validate = false;

    }else{
        $('#addToCartError').html('')
        $('#addToCartError').addClass('text-success')
        $('#addToCartError').removeClass('text-danger')
    }


    if(idProduct != null && idSize != null && validate){

       $.ajax({
           url : baseUrl + '/cart/addToCart',
           method : 'POST',
           data : {
               idProduct : idProduct,
               idSize : idSize,
               quantity : quantity
           },
           success: function(data){
               $('#addToCartError').html(data)
               $('#addToCartError').addClass('text-success')
               $('#addToCartError').removeClass('text-danger')
               alert(data)
           },
           error: function(xhr, err, status){
               if(xhr.status == 400){
                   $('#addToCartError').addClass('text-danger')
                   $('#addToCartError').removeClass('text-success')
                   $('#addToCartError').html(xhr.responseJSON.errorMsg)
               }
           }
       })

    }
}

function contact() {

    var validate = true;

    let name = $('#nameContact').val();
    let email = $('#emailContact').val();
    let message = $('#messageContact').val();

    let regEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    let regName = /^[A-Z][a-z]{1,13}$/;

    if (name == '') {

        $('#nameContactError').html('Name is required.');
        validate = false;

    } else if (!regName.test(name)) {

        $('#nameContactError').html('Name must start with a capital letter!');
        validate = false;

    } else {
        $('#nameContactError').html('')
    }

    if (email == '') {

        $('#emailContactError').html('Email is required.');
        validate = false;

    } else if (!regEmail.test(email)) {

        $('#emailContactError').html('Email is invalid!');
        validate = false;

    } else {
        $('#emailContactError').html('')
    }

    if (message == '') {

        $('#messageContactError').html('Message is required.');
        validate = false;

    }else {
        $('#messageContactError').html('')
    }

    if(validate){

        $.ajax({
            url: baseUrl + '/contact',
            method: 'POST',
            data: {
                name : name,
                email : email,
                message : message
            },
            success: function(data){
                $('#errorContact').addClass('text-success')
                $('#errorContact').removeClass('text-danger')
                $('#errorContact').html(data)
                alert(data)
                window.location.reload();
            },
            error: function(xhr, status, err){
                if(xhr.status == 400){
                    $('#errorContact').addClass('text-danger')
                    $('#errorContact').removeClass('text-success')
                    $('#errorContact').html(xhr.responseJSON.errorMsg)
                }
            }
        })
    }
}

function login(){

    var validate = true;

    let email = $('#emailLogin').val();
    let password = $('#passLogin').val()

    let regEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;

    if(email == ''){

        $('#emailLoginError').html('Email is required.');
        validate = false;

    }else if(!regEmail.test(email)){

        $('#emailLoginError').html('Email is invalid!');
        validate = false;

    }else{
        $('#emailLoginError').html('')
    }

    if(password.length < 8){

        $('#passLoginError').html('Password must have at least 8 characters.');
        validate = false;

    }else{
        $('#passLoginError').html('')
    }

    if(validate){
        $.ajax({
            url: baseUrl + '/login',
            method: 'POST',
            data: {
                email : email,
                password : password,
                _token : token
            },
            success: function(data){
                $('#errorLogin').addClass('text-success')
                $('#errorLogin').removeClass('text-danger')
                $('#errorLogin').html(data)
                alert(data)
                window.location.replace(baseUrl);
            },
            error: function(xhr, status, err){
                if(xhr.status == 400){
                    $('#errorLogin').addClass('text-danger')
                    $('#errorLogin').removeClass('text-success')
                    $('#errorLogin').html(xhr.responseJSON.errorMsg)
                }
            }
        })
    }
}

function register(){

    var validate = true;

    let firstName = $('#firstNameRegister').val();
    let lastName = $('#lastNameRegister').val();
    let city = $('#cityRegister').val();
    let email = $('#emailRegister').val();
    let password = $('#passRegister').val();
    let confirmPassword = $('#passConfirmRegister').val();
    let street = $('#streetRegister').val();

    let regEmail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    let regFirstName = /^[A-Z][a-z]{1,13}$/;
    let regLastName = /^([A-Z][a-z]{1,30}\s?)+$/;
    let regStreet = /^[A-Z][a-z]{3,20}(\s[A-Z][a-z]{3,20})*\s[0-9]+([a-z])?$/;

    if(firstName == ''){

        $('#firstNameRegisterError').html('First name is required.');
        validate = false;

    }else if(!regFirstName.test(firstName)){

        $('#firstNameRegisterError').html('First name must start with a capital letter!');
        validate = false;

    }else{
        $('#firstNameRegisterError').html('')
    }

    if(lastName == ''){

        $('#lastNameRegisterError').html('Last name is required.');
        validate = false;

    }else if(!regLastName.test(lastName)){

        $('#lastNameRegisterError').html('Last name must start with a capital letter!');
        validate = false;

    }else{
        $('#lastNameRegisterError').html('')
    }

    if(city == '0'){

        $('#cityRegisterError').html('City is required.');
        validate = false;

    }else{
        $('#cityRegisterError').html('');
    }

    if(email == ''){

        $('#emailRegisterError').html('Email is required.');
        validate = false;

    }else if(!regEmail.test(email)){

        $('#emailRegisterError').html('Email is invalid!');
        validate = false;

    }else{
        $('#emailRegisterError').html('')
    }

    if(street == ''){

        $('#streetRegisterError').html('Street is required.');
        validate = false;

    }else if(!regStreet.test(street)){

        $('#streetRegisterError').html('Street must start with a capital letter and must have number of building!');
        validate = false;

    }else{
        $('#streetRegisterError').html('')
    }

    if(password == ''){

        $('#passRegisterError').html('Password is required.');
        validate = false;

    }else if(password.length < 8){

        $('#passRegisterError').html('Password must have at least 8 characters.');
        validate = false;

    }else{
        $('#passRegisterError').html('')
    }

    if(confirmPassword != password){

        $('#passConfirmRegister').html('Passwords are not the same.');
        validate = false;

    }else{
        $('#passConfirmRegister').html('')
    }

    if(validate){
        $.ajax({
            url: baseUrl + '/registration',
            method: 'POST',
            data: {
                firstName : firstName,
                lastName : lastName,
                city : city,
                email : email,
                password : confirmPassword,
                street : street,
                _token : token
            },
            success: function(data){
                $('#errorRegistration').addClass('text-success')
                $('#errorRegistration').removeClass('text-danger')
                $('#errorRegistration').html(data)
                alert(data)
                window.location.reload();
            },
            error: function(xhr, status, err){
                if(xhr.status == 400){
                    $('#errorRegistration').addClass('text-danger')
                    $('#errorRegistration').removeClass('text-success')
                    $('#errorRegistration').html(xhr.responseJSON.errorMsg)
                }
            }
        })
    }
}


