document.addEventListener('DOMContentLoaded',function(){
    var btn = document.getElementById("save");
    btn.addEventListener('click', function(f){
      f.preventDefault();
      if (document.getElementById("fname").value == ""){
        swal({
          icon: "warning",
          title: "Fail!",
          text: "First name is required!",
        });      
        document.getElementById("fname").focus();
      }
      else if (document.getElementById("lname").value == ""){
        swal({
          icon: "warning",
          title: "Fail!",
          text: "Last name is required!",
        });      
        document.getElementById("lname").focus();
      }
      else if (document.getElementById("email").value == ""){
        swal({
          icon: "warning",
          title: "Fail!",
          text: "Email is required!",
        });      
        document.getElementById("email").focus();
      }
      else if ((/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/.test(document.getElementById("email").value))==false){
        swal({
          icon: "warning",
          title: "Fail!",
          text: "Enter a valid email address!",
        });      
        document.getElementById("email").focus();
      }
      else if (document.getElementById("telephone").value == ""){
        swal({
          icon: "warning",
          title: "Fail!",
          text: "Phone number is required!",
        });      
        document.getElementById("telephone").focus();
      }
      else if ((/^[0-9]{3}-[0-9]{3}-[0-9]{4}/.test(document.getElementById("telephone").value))==false){
        swal({
          icon: "warning",
          title: "Fail!",
          text: "Phone number format xxx-xxx-xxxx!",
        });      
        document.getElementById("telephone").focus();
      }
      else if (document.getElementById("company").value == ""){
        swal({
          icon: "warning",
          title: "Fail!",
          text: "Company name is required!",
        });      
        document.getElementById("company").focus();
      }
      else{
        $.ajax({
            type: "POST",
            url: "addcontact.php",
            data: {
                title: $("#title").val(),
                fname: $("#fname").val(),
                lname: $("#lname").val(),
                email: $("#email").val(),
                telephone: $("#telephone").val(),
                company: $("#company").val(),
                type: $("#type").val(),
                assigned: $("#assigned-to").val()
            },
            success: function(output) {
              if(output=="Saved"){
                swal({
                  icon: "success",
                  title:"Saved!",
                  text: "Contact Saved Successfully!",
                });
              }
              else if(output=="Error"){
                swal({
                  icon: "warning",
                  title: "Fail!",
                  text: "Email is already registered!",
                });
              }
            }
        })
      }
    });
})
  
  