$(document).ready(function () {
    // get the user data 
    $('.updateBtn').on('click',  getDataUpdateUser);
    $('.deleteBtn').on('click',  getDataDeleteUser);

    
});

function getDataUpdateUser(){
    $('#updateUser').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    $('#userId').val(data[0]);
    $('#fname').val(data[1]);
    $('#mname').val(data[2]);
    $('#lname').val(data[3]);
    $('#age').val(data[4]);
    $('#dob').val(data[5]);
    $('#email').val(data[6]);
    $('.form-select').val(data[7]);

    console.log(data);
}

function getDataDeleteUser(){
    $('#deleteUser').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    $('#userIdDelete').val(data[0]);
    $('#fname').val(data[1]);
    $('#mname').val(data[2]);
    $('#lname').val(data[3]);
    $('#age').val(data[4]);
    $('#dob').val(data[5]);
    $('#email').val(data[6]);
    $('.form-select').val(data[7]);
  
    console.log(data);
}