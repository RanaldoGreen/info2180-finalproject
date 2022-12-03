document.addEventListener('DOMContentLoaded',function(){
    document.getElementById("confirm").onclick=function(){
        location.href = "logout.php";
    };

    document.getElementById("cancel").onclick=function(){
        location.href = "dashboard.php";
    };

    document.getElementById("loginpage").onclick=function(){
        location.href = "index.php";
    };
})

document.addEventListener('DOMContentLoaded',function(){
    document.getElementById("loginpage").onclick=function(){
        location.href = "index.php";
    };
})