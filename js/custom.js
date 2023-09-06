function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function saveAs(uri, filename) {
    var link = document.createElement('a');

    if (typeof link.download === 'string') {
        link.href = uri;
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);

    } else {
        window.open(uri);
    }
}

$(document).ready(function(){

  // EDIT PROFILE
  $("#editProfile").click(function(){
    $('#editprofileModal').modal('show');
  });

  $("#editProfileBtn").click(function(){
    var e_user_id = document.getElementById("spanForIdEdit").innerHTML;
    var e_firstname = $('#edit_firstname').val();
    var e_middlename = $('#edit_middlename').val();
    var e_lastname = $('#edit_lastname').val();
    var e_age = $('#edit_age').val();
    var e_sex = $('#edit_sex').val();
    var e_address = $('#edit_address').val();
    var e_email = $('#edit_email').val();
    var e_contact = $('#edit_contact').val();
    // var e_password = $('#edit_password').val();
    // var e_passconf = $('#edit_passconf').val();

    // alert(e_user_id);

    $.ajax({
      url: "http://localhost/genelytics/main/edit_profile",
      method: 'POST',
      dataType: "JSON",
      data: {
        user_id: e_user_id,
        firstname: e_firstname,
        middlename: e_middlename,
        lastname: e_lastname,
        age: e_age,
        sex: e_sex,
        address: e_address,
        email: e_email,
        contact: e_contact,
        // password: e_password,
        // passconf: e_passconf
      },
      success: function(response) {
        if (response['message'] == "Profile Successfully Updated!") {
          $('#editprofileModal').modal('toggle');

          $('#successEditAccountModal').modal('show');
          setTimeout(function() {
            window.location.reload();
          }, 3500);
        } else {
          alert(response['message']);
        }
      }
    });    
  });
});