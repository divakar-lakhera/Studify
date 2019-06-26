$.ajax({
    url: "../db_php/get_isReq.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      loadUI(data);
    }  });
function loadUI(s)
{      
    if(s[0]!=0)
    {
        document.getElementById("smain").removeAttribute("hidden");
    }
    else
    {
        document.getElementById("smain").setAttribute("hidden",true);
    }
}
$.ajax({
    url: "../db_php/get_userInfo.fac.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      loadUI2(data);
    }  });
function loadUI2(s)
{
  var ff="["+s+"]";
  var parsed = JSON.parse(ff); 
  var  user = parsed[0];   
  document.getElementById('c1').innerHTML=user.sub1code;
  document.getElementById('c1n').innerHTML=user.sub1name;
 document.getElementById('a1').placeholder=user.sub1att;
 document.getElementById('g1').placeholder=user.sub1grade;
 document.getElementById('cid1').value=user.sub1code;
 //
 document.getElementById('c2').innerHTML=user.sub2code;
 document.getElementById('c2n').innerHTML=user.sub2name;
 document.getElementById('a2').placeholder=user.sub2att;
 document.getElementById('g2').placeholder=user.sub2grade;
 document.getElementById('cid2').value=user.sub2code;
 //
 document.getElementById('c3').innerHTML=user.sub3code;
 document.getElementById('c3n').innerHTML=user.sub3name;
 document.getElementById('a3').placeholder=user.sub3att;
 document.getElementById('g3').placeholder=user.sub3grade;
 document.getElementById('cid3').value=user.sub3code;
 //
 document.getElementById('c4').innerHTML=user.sub4code;
 document.getElementById('c4n').innerHTML=user.sub4name;
 document.getElementById('a4').placeholder=user.sub4att;
 document.getElementById('g4').placeholder=user.sub4grade;
 document.getElementById('cid4').value=user.sub4code;
 //
 document.getElementById('c5').innerHTML=user.sub5code;
 document.getElementById('c5n').innerHTML=user.sub5name;
 document.getElementById('a5').placeholder=user.sub5att;
 document.getElementById('g5').placeholder=user.sub5grade;
 document.getElementById('cid5').value=user.sub5code;
 //
 document.getElementById('c6').innerHTML=user.sub6code;
 document.getElementById('c6n').innerHTML=user.sub6name;
 document.getElementById('a6').placeholder=user.sub6att;
 document.getElementById('g6').placeholder=user.sub6grade;
 document.getElementById('cid6').value=user.sub6code;
}