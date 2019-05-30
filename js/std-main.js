/*  std-main
    Written By: Divakar Lakhera
    ICT-IIT-KANPUR
    does AJAX Request Gets data from SQL DB with help of PHP script
*/
    $.ajax({
      url: "../db_php/get_stdInfo.php",
      method: "GET",
      success: function(data) {
        console.log(data);
         var pushedData = jQuery.parseJSON(data);
         drawGraph(pushedData);
      }  });
    function drawGraph(dd){
    feather.replace()
    // Graphs
    var ctx = document.getElementById('myChart')
    if(dd.s1cgpa == 0)
    {
      dd.s1cgpa=undefined;
    }
    if(dd.s2cgpa == 0)
    {
      dd.s2cgpa=undefined;
    }
    if(dd.s3cgpa == 0)
    {
      dd.s3cgpa=undefined;
    }
    if(dd.s4cgpa == 0)
    {
      dd.s4cgpa=undefined;
    }
    if(dd.s5cgpa == 0)
    {
      dd.s5cgpa=undefined;
    }
    if(dd.s6cgpa == 0)
    {
      dd.s6cgpa=undefined;
    }
    if(dd.s7cgpa == 0)
    {
      dd.s7cgpa=undefined;
    }
    if(dd.s8cgpa == 0)
    {
      dd.s8cgpa=undefined;
    }
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
            dd.s1cgpa,
            dd.s2cgpa,
            dd.s3cgpa,
            dd.s4cgpa,
            dd.s5cgpa,
            dd.s6cgpa,
            dd.s7cgpa,
            dd.s8cgpa

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
   var s=0;
   var k=0;
   if(dd.s1cgpa != undefined && dd.s1cgpa != 0 )
   {
     s+=parseInt(dd.s1cgpa);
     k+=1;
   }
   if(dd.s2cgpa != undefined && dd.s2cgpa != 0)
   {
     s+=parseInt(dd.s2cgpa );
     k+=1;
   }
   if(dd.s3cgpa != undefined && dd.s3cgpa != 0)
   {
     s+=parseInt(dd.s3cgpa);
     k+=1;
   }
   if(dd.s4cgpa != undefined && dd.s4cgpa != 0)
   {
     s+=parseInt(dd.s4cgpa);
     k+=1;
   }
   if(dd.s5cgpa != undefined && dd.s5cgpa != 0)
   {
     s+=parseInt(dd.s5cgpa);
     k+=1;
   }
   if(dd.s6cgpa != undefined && dd.s6cgpa != 0)
   {
     s+=parseInt(dd.s6cgpa);
     k+=1;
   }
   if(dd.s7cgpa != undefined && dd.s7cgpa != 0)
   {
     s+=parseInt(dd.s7cgpa);
     k+=1;
   }
   if(dd.s8cgpa != undefined && dd.s8cgpa != 0)
   {
     s+=parseInt(dd.s8cgpa);
     k+=1;
   }
   var avg=s/k;
   document.getElementById('cgpa').innerHTML=avg;
   document.getElementById('uname').innerHTML=dd.fname+" "+dd.sname;
   document.getElementById('s1c').innerHTML=dd.sub1code;
   document.getElementById('s1n').innerHTML=dd.sub1name;
   document.getElementById('s1ap').innerHTML=dd.sub1att+"%";
   document.getElementById('s1g').innerHTML=dd.sub1grade;
   //
   document.getElementById('s2c').innerHTML=dd.sub2code;
   document.getElementById('s2n').innerHTML=dd.sub2name;
   document.getElementById('s2ap').innerHTML=dd.sub2att+"%";
   document.getElementById('s2g').innerHTML=dd.sub2grade;
   //
   document.getElementById('s3c').innerHTML=dd.sub3code;
   document.getElementById('s3n').innerHTML=dd.sub3name;
   document.getElementById('s3ap').innerHTML=dd.sub3att+"%";
   document.getElementById('s3g').innerHTML=dd.sub3grade;
   //
   document.getElementById('s4c').innerHTML=dd.sub4code;
   document.getElementById('s4n').innerHTML=dd.sub4name;
   document.getElementById('s4ap').innerHTML=dd.sub4att+"%";
   document.getElementById('s4g').innerHTML=dd.sub4grade;
   //
   document.getElementById('s5c').innerHTML=dd.sub5code;
   document.getElementById('s5n').innerHTML=dd.sub5name;
   document.getElementById('s5ap').innerHTML=dd.sub5att+"%";
   document.getElementById('s5g').innerHTML=dd.sub5grade;
   //
   document.getElementById('s6c').innerHTML=dd.sub6code;
   document.getElementById('s6n').innerHTML=dd.sub6name;
   document.getElementById('s6ap').innerHTML=dd.sub6att+"%";
   document.getElementById('s6g').innerHTML=dd.sub6grade;
   
   if(dd.gender=='M')
   {
    document.getElementById('dp').src="res/mstd.svg";
   }
   else
   {
    document.getElementById('dp').src="res/girl.svg";
   }
  }
  $.ajax({
    url: "../db_php/get_collName.php",
    method: "GET",
    success: function(data) {
      console.log(data);
       var pushedData = jQuery.parseJSON(data);
       setCollName(pushedData);
    }  });
 function setCollName(v)
 {
  document.getElementById('collName').innerHTML=v.cname;
 }