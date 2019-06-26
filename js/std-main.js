/*  std-main
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
   else if(kk[0] == '2')
   {
     document.getElementById('std-content').setAttribute("hidden",true);
     document.getElementById('std-content2').setAttribute("hidden",true);
   }  
  }
    
    $.ajax({
      url: "../db_php/get_userInfo.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        drawGraph(data);
      }  });
    function drawGraph(dd){

      if(auth ==1){
      var ff="["+dd+"]";
      var parsed = JSON.parse(ff); 
       var  user = parsed[0];   
       //some value sanitation :)
       if(user.c0 == 0 )
       {
        user.c0=undefined;
       }
       if(user.c1 == 0)
       {
        user.c1=undefined;
       }
       if(user.c2 == 0)
       {
        user.c2=undefined;
       }
       if(user.c3 == 0)
       {
        user.c3=undefined;
       }
       if(user.c4 == 0)
       {
        user.c4 = undefined;
       }
       if(user.c5 == 0)
       {
        user.c5 =undefined;
       }
       if(user.c6 == 0)
       {
        user.c6 =undefined;
       }
       if(user.c7 == 0)
       {
        user.c7 =undefined;
       }
    // Graphs
    var ctx = document.getElementById('myChart')
    // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          '1st Sem',
          '2nd Sem',
          '3rd Sem',
          '4th Sem',
          '5th Sem',
          '6th Sem',
          '7th Sem',
          '8th Sem'
        ],
        datasets: [{
          data: [
            user.c0,
            user.c1,
            user.c2,
            user.c3,
            user.c4,
            user.c5,
            user.c6,
            user.c7
            
          ],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true,
              steps:10,
              max:10
            }
          }]
        },
        legend: {
          display: false
        }
      }
    })
    document.getElementById('uname').innerHTML=user.uname;
    var s=0;
    var k=0;
    if(user.c0 != undefined && user.c0 != 0 )
    {
      s+=parseInt(user.c0);
      k+=1;
    }
    if(user.c1 != undefined && user.c1 != 0)
    {
      s+=parseInt(user.c1 );
      k+=1;
    }
    if(user.c2 != undefined && user.c2 != 0)
    {
      s+=parseInt(user.c2);
      k+=1;
    }
    if(user.c3!= undefined && user.c3 != 0)
    {
      s+=parseInt(user.c3);
      k+=1;
    }
    if(user.c4 != undefined && user.c4 != 0)
    {
      s+=parseInt(user.c4);
      k+=1;
    }
    if(user.c5 != undefined && user.c5 != 0)
    {
      s+=parseInt(user.c5);
      k+=1;
    }
    if(user.c6 != undefined && user.c6 != 0)
    {
      s+=parseInt(user.c6);
      k+=1;
    }
    if(user.c7 != undefined && user.c7 != 0)
    {
      s+=parseInt(user.c7);
      k+=1;
    }
    var avg=s/k;
    document.getElementById('cgpa').innerHTML=avg.toFixed(2);
    document.getElementById('brn').innerHTML=user.rollno;
    //---
    document.getElementById('s1c').innerHTML=user.sub1code;
    document.getElementById('s1n').innerHTML=user.sub1name;
   document.getElementById('s1ap').innerHTML=user.sub1att+"%";
   document.getElementById('s1g').innerHTML=user.sub1grade;
   //
   document.getElementById('s2c').innerHTML=user.sub2code;
   document.getElementById('s2n').innerHTML=user.sub2name;
   document.getElementById('s2ap').innerHTML=user.sub2att+"%";
   document.getElementById('s2g').innerHTML=user.sub2grade;
   //
   document.getElementById('s3c').innerHTML=user.sub3code;
   document.getElementById('s3n').innerHTML=user.sub3name;
   document.getElementById('s3ap').innerHTML=user.sub3att+"%";
   document.getElementById('s3g').innerHTML=user.sub3grade;
   //
   document.getElementById('s4c').innerHTML=user.sub4code;
   document.getElementById('s4n').innerHTML=user.sub4name;
   document.getElementById('s4ap').innerHTML=user.sub4att+"%";
   document.getElementById('s4g').innerHTML=user.sub4grade;
   //
   document.getElementById('s5c').innerHTML=user.sub5code;
   document.getElementById('s5n').innerHTML=user.sub5name;
   document.getElementById('s5ap').innerHTML=user.sub5att+"%";
   document.getElementById('s5g').innerHTML=user.sub5grade;
   //
   document.getElementById('s6c').innerHTML=user.sub6code;
   document.getElementById('s6n').innerHTML=user.sub6name;
   document.getElementById('s6ap').innerHTML=user.sub6att+"%";
   document.getElementById('s6g').innerHTML=user.sub6grade;
   document.getElementById('dp').src=user.dpLoc;
  }
}

$.ajax({
  url: "../db_php/get_facinfo.php",
  method: "GET",
  success: function(data) {
    console.log(data);
    updateForFac(data);
  }  });

  function updateForFac(ff)
  {   
    if(auth==2){
    var ff="["+ff+"]";
    var parsed = JSON.parse(ff); 
    var  user = parsed[0];
    document.getElementById('uname').innerHTML=user.fac_name;
    document.getElementById('dp').src=user.fac_dp;
    document.getElementById('brn').innerHTML=user.fac_dept;
  }
}
