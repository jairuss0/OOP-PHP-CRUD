let dataTable;

$(document).ready(function () {
  loadData();
  $("#createBtnSubmit").click(function () {
    createUser();
  });
  $("#deleteBtnSubmit").click(function (){
    deleteUser();
  });
  $("#updateBtnSubmit").click(function(){
    updateUser();
  });
  // evaluate user input on email if the email already exists before submission
  $("#email_insert").on('input',function(){
    const email = $(this).val();
    checkEmail(email);
  })
  
});

//  fetch data from the database
function loadData() {
  $.ajax({
    type: "GET",
    url: "../includes/readData.inc.php",
    success: function (response) {
      console.log(response);
      const items = JSON.parse(response);
      // clear and destroy existing dataTable instance
      if (dataTable) {
        dataTable.clear().destroy();
      }
      let rows = "";
      items.forEach((item) => {
        rows += `<tr>
                                      <td class="user_id">${item["id"]}</td>
                                      <td>${item["firstName"]} </td>
                                      <td>${item["middleName"]}</td>
                                      <td>${item["lastName"]}</td>
                                      <td>${item["age"]}</td>
                                      <td>${item["dob"]}</td>
                                      <td>${item["email"]}</td>
                                      <td>${item["job"]}</td>
                                      <td><button type="button" class="btn btn-success updateBtn"  onclick="showUpdateModal(${item.id},'${item.firstName}','${item.middleName}','${item.lastName}',${item.age},'${item.dob}','${item.email}','${item.job}')">
                                               Update
                                          </button>
                                          <button type="button" class="btn btn-danger deleteBtn" onclick="showDeleteModal(${item.id})">
                                               Delete
                                          </button></td>
                                  </tr>`;
      });

      $("#myTable tbody").html(rows);
      dataTable = $("#myTable").DataTable({
        responsive: true,
      }); // Re-Initialize dataTable
    },
  });
}

// create user
function createUser() {
  let fname = $("#fname_insert").val();
  let mname = $("#mname_insert").val();
  let lname = $("#lname_insert").val();
  let email = $("#email_insert").val();
  let dob = $("#dob_insert").val();
  let age = $("#age_insert").val();
  let job = $("#job_insert").val();
  // check if any of the fields is empty
  if (
    fname == "" ||
    lname == "" ||
    email == "" ||
    dob == "" ||
    age == "" ||
    job == ""
  ) {
    Swal.fire({
      title: "Error!",
      text: "All fields required!",
      icon: "error",
    });
  } else {
    $.ajax({
      method: "POST",
      url: "../includes/createUser.inc.php",
      data: {
        createUserSubmit: true,
        fname: fname,
        mname: mname,
        lname: lname,
        email: email,
        dob: dob,
        age: age,
        job: job,
      },
      success: function (response) {
        console.log(response);
        const message = JSON.parse(response);
        if(message.icon === 'success'){
          loadData(); // re-initialize table
          $("#createUser").modal("hide");
          $("#fname_insert").val("");
          $("#mname_insert").val("");
          $("#lname_insert").val("");
          $("#email_insert").val("");
          $("#dob_insert").val("");
          $("#age_insert").val("");
          $("#job_insert").val("");
          $(".user_data").html("");
        }
        Swal.fire({
          title: message.alert,
          text: message.alert,
          icon: message.icon,
        });
      },
      error: function (response) {
        console.log(response);
        const message = JSON.parse(response);
        Swal.fire({
          title: "Error!",
          text: message.alert,
          icon: "error",
        });
      },
    });
  }
}

function updateUser(){
  let userId = $("#userId_update").val();
  let fname = $("#fname_update").val();
  let mname = $("#mname_update").val();
  let lname = $("#lname_update").val();
  let email = $("#email_update").val();
  let dob = $("#dob_update").val();
  let age = $("#age_update").val();
  let job = $("#job_update").val();

  if( fname == "" || lname == ""  || dob == "" || age == "" ||job == ""){
    Swal.fire({
      title: "Error!",
      text: "All fields required!",
      icon: "error",
    });
  }
  else{
      $.ajax({
        method: "POST",
        url: "../includes/updateUser.inc.php",
        data: {
          updateUserSubmit: true,
          userId: userId,
          fname: fname,
          mname: mname,
          lname: lname,
          dob: dob,
          age: age,
          job: job,
        },
        success: function(response){
          console.log(response);
          const message = JSON.parse(response);
          $("#updateUser").modal("hide");
          loadData(); // re-initiliaze table
          Swal.fire({
            title: message.alert,
            text: message.alert,
            icon: message.icon,
          });
        },
        error: function(response){
          console.log(response);
          const message = JSON.parse(response);
          Swal.fire({
           title: "Error!",
           text: message.alert,
            icon: "error",
          });
        }
      })
  }
}

function deleteUser(){
  const user_id = $("#userId_delete").val();
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then(function (result){
    if(result.isConfirmed){
      // call ajax
      $.ajax({
        method: "POST",
        url: "../includes/deleteUser.inc.php",
        data:{
          deleteUserSubmit: true,
          userId: user_id,
        },
        success: function(response){
          console.log(response);
          const message = JSON.parse(response); // convert it into json object
          $("#deleteUser").modal("hide");
          loadData(); // re-initialize table
          Swal.fire({
            title: message.alert,
            text: message.alert,
            icon: message.icon
          });
        },
        error: function(response){
          console.log(response);
          const message = JSON.parse(response);
          $("#deleteUser").modal("hide");
          Swal.fire({
            title: "Error!",
            text: message.alert,
            icon: "error",
          });
        }
      })
    }
    else{
      $("#deleteUser").modal("hide");
    }
  });
}

function showUpdateModal(id,fname,mname,lname,age,dob,email,job){
  console.log(id+","+fname+","+mname+","+lname+","+age+","+dob+","+email+","+job);
  $("#userId_update").val(id);
  $("#fname_update").val(fname);
  $("#mname_update").val(mname);
  $("#lname_update").val(lname);
  $("#age_update").val(age);
  $("#dob_update").val(dob);
  $("#email_update").val(email);
  $("#job_update").val(job);
  $("#updateUser").modal('show');
}


function showDeleteModal(id){
  console.log(id);
  $("#userId_delete").val(id); // pass the value of the user to input
  $("#deleteUser").modal('show'); 
}

var toastMixin = Swal.mixin({
  toast: true,
  icon: 'success',
  title: 'General Title',
  animation: false,
  position: 'top-right',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

function checkEmail(email){
  if(email.length > 0){
    $.ajax({
      method: "POST",
      url: '../includes/readEmail.inc.php',
      data: {
        evaluateEmail: true,
        email: email
      },
      success: function(response){
        console.log(response);
        const message = JSON.parse(response);
        if(message.result === 'exists'){
          $('#createBtnSubmit').prop('disabled', true);
          toastMixin.fire({
            title: 'Email Already Exists',
            icon: 'error'
          });
        }
        else{
          $('#createBtnSubmit').prop('disabled', false);
          toastMixin.fire({
            title: 'Email is Available',
            icon: 'success'
          });
        }
      } 
    })
  }
  else{
    $('#createBtnSubmit').prop('disabled', false);
  }
}