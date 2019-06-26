feather.replace();
    $.ajax({
      url: "../db_php/get_userInfo.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        drawPage(data);
      }  });
    function drawPage(dd){
      var ff="["+dd+"]";
      var parsed = JSON.parse(ff); 
       var  user = parsed[0];   
   document.getElementById('uname').innerHTML=user.uname;
   document.getElementById('brn').innerHTML=user.rollno;
   document.getElementById('dp').src=user.dpLoc;
   document.getElementById('dpBig').src=user.dpLoc;
   document.getElementById('ucname').placeholder=user.uname;
   document.getElementById('ucphno').placeholder=user.phno;
   document.getElementById('em').placeholder=user.email;
  }
