document.addEventListener('DOMContentLoaded',function(){
    var btn = document.getElementById("dashboard");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        window.history.replaceState(null, document.title, "dashboard.php");
        $.ajax({
            type: "POST",
            url: "dashboard.php",
            data: {
            },
            success: function(e) {
              $("#load").load('dashboard.php')
            }
        })
    });
    var btn = document.getElementById("newcontact");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        window.history.replaceState(null, document.title, "newcontact.php");
        $.ajax({
            type: "POST",
            url: "newcontact.php",
            data: {
            },
            success: function(e) {
              $("#load").load('newcontact.php')
            }
        })
    });
    var btn = document.getElementById("users");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        window.history.replaceState(null, document.title, "users.php");
        $.ajax({
            type: "POST",
            url: "users.php",
            data: {
            },
            success: function(e) {
              $("#load").load('users.php')
            }
        })
    });
})
  
  