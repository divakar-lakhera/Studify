$.ajax({
    url: "../db_php/get_cnotice.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      setUiClub(data);
    }  });

    function getfno(s)
    {
      var v=0;
      while(isNaN(s[v]))
      {v++;}
    
      return v;
    }

function setUiClub(dd)
{
  var ff="["+dd+"]";
  var parsed = JSON.parse(ff); 
  var rows = '';
  for (var p in parsed) {
  for (var k in parsed[p]) {
   var k1=k.substring(0,getfno(k));
  rows += '<tr><td>' + k1 + '</td><td>' + parsed[p][k] + '</td></tr>'
}
      document.getElementById("ff0ff").innerHTML=rows;
}