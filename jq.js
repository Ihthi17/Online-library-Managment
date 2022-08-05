$(document).ready(function(){
    $("#eye").click(function(){
      $(this).toggleClass('.fa-eye-slash');
      var x=$("#password").attr("type");
      if(x=='password')
      {
        $("#password").attr('type','text');
      }
      else{
        $("#password").attr('type','password');
      }
    });
    
    
      });
      $(document).ready(function(){
        $("#btn").click(function(){
          $("#frm").toggle(300);
        });
      });