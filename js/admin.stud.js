$.ajax({
    url: "../db_php/get_studinfo.all.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      setUi(data);
    }  });


function setUi(d)
{
    var ff="["+d+"]";
    var parsed = JSON.parse(ff); 
    var  user = parsed[0];
    var rows = '';
    for (var p in parsed) {
        for (var k in parsed[p]) {
        rows += '<tr><td>' + k + '</td><td>' + parsed[p][k] + '</td>' +'<td>' + '<a href=\"db_php/del.php?id='+k+'&idd=2\">Delete</a> || <a href=\"ccUpdate.php\">Update Couse</a></tr></td>';
      }
      }
            document.getElementById("a0a0a0a0a").innerHTML=rows;
      }