/*
    std-main
    Written By: Divakar Lakhera
    ICT-IIT-KANPUR
    does AJAX Request Gets data from SQL DB with help of PHP script
*/

var auth=0;
feather.replace();
$.ajax({
  url: "../db_php/get_userAuth.php",
  method: "GET",
  success: function(data) {
    console.log(data);
    setAuth(data);
  }  });
   
  function setAuth(kk)
  { 
    auth=kk[0];
    if(kk[0] == '1')
    {
      document.getElementById('fac-content').setAttribute("hidden",true);
      document.getElementById('fac-content2').setAttribute("hidden",true);
    }
   if(kk[0] == '2')
   {
     document.getElementById('std-content').setAttribute("hidden",true);
     document.getElementById('std-content2').setAttribute("hidden",true);
   }  
  }

feather.replace();
    $.ajax({
      url: "../db_php/get_userInfo.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        drawPage(data);
      }  });
      feather.replace();
      $.ajax({
        url: "../db_php/get_facinfo.php",
        method: "GET",
        success: function(data) {
          console.log(data);
          drawPage(data);
        }  });
    function drawPage(dd){
      var ff="["+dd+"]";
      var parsed = JSON.parse(ff); 
       var  user = parsed[0];  
      if(auth==1){
       
   document.getElementById('uname').innerHTML=user.uname;
   document.getElementById('brn').innerHTML=user.rollno;
   document.getElementById('dp').src=user.dpLoc;
   document.getElementById('dpBig').src=user.dpLoc;
   document.getElementById('ucname').placeholder=user.uname;

   document.getElementById('ucphno').placeholder=user.phno;
   document.getElementById('em').placeholder=user.email;
  }
  else if(auth==2)
{
     
  document.getElementById('uname').innerHTML=user.fac_name;
  document.getElementById('brn').innerHTML=user.fac_dept;
  document.getElementById('dp').src=user.fac_dp;
  document.getElementById('dpBig').src=user.fac_dp;
  document.getElementById('ucname').placeholder=user.fac_name;

  document.getElementById('ucphno').placeholder=user.fac_phno;
  document.getElementById('em').placeholder=user.fac_email;
 }
}
