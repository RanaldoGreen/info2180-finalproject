document.addEventListener('DOMContentLoaded',function(){
  var btn = document.getElementById("save");
  btn.addEventListener('click', function(f){
    f.preventDefault();
    if (document.getElementById("area").value == ""){
      swal({
        icon: "warning",
        title: "Fail!",
        text: "The comment section is empty!",
      });      
      document.getElementById("area").focus();
    }
    else{
      $.ajax({
          type: "POST",
          url: "addnotes.php",
          data: {
              view: $("#assign").val(),
              comment: $("#area").val(),
          },
          success: function(output) {
            $("#loadnote").html(output);
          }
      })
      var contact = document.getElementById('assign').value;         
      var xhttp = new XMLHttpRequest();
      xhttp.open("GET", "notes.php?updated="+contact, false);
      xhttp.send();
      response = xhttp.responseText;
      document.getElementById("result2").innerHTML = response;    
    }
  });
})

