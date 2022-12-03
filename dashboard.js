document.addEventListener('DOMContentLoaded',function(){
    var  btn = document.getElementById("all");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        var filter = 'all'               
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "contactsload.php?filter="+filter, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result").innerHTML = response;
    });
    var  btn = document.getElementById("sales");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        var filter = 'sales';                
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "contactsload.php?filter="+filter, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result").innerHTML = response;
    });
    var  btn = document.getElementById("support");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        var filter = 'support';                
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "contactsload.php?filter="+filter, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result").innerHTML = response;
    });
    var  btn = document.getElementById("to-me");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        var filter = 'mine';                
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "contactsload.php?filter="+filter, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result").innerHTML = response;
    });
})

