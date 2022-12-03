document.addEventListener('DOMContentLoaded',function(){
    var btn = document.getElementById("assign");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        var contact = document.getElementById('assign').value;                
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "notes.php?to-me="+contact, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result").innerHTML = response;
        
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "notes.php?updated="+contact, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result2").innerHTML = response;
    });
    var btn = document.getElementById("sales");
    btn.addEventListener('click', function(f){
        f.preventDefault();
        var type = document.getElementById('sales').value;                
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "notes.php?type="+type, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result1").innerHTML = response;

        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "notes.php?updated="+type, false);
        xhttp.send();
        response = xhttp.responseText;
        document.getElementById("result2").innerHTML = response;
    });
})

