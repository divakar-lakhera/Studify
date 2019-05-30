var previous=0;
var screen=0;
var prevOp=0;
var isEq=0;
function screenUpdate(v)
{
    document.getElementById('scc').value=v;
    screen=v;
}
function nbClick(a)
{   
    screen=(screen*10)+a;
    screenUpdate(screen);
}
function clr()
{
    screenUpdate(0);
    previous=0;
}
function doOperation(zz)
{
    var curr=parseInt(document.getElementById('scc').value);
    switch(zz)
    {
        case 10:
               previous+=curr;
               prevOp=10;
               screenUpdate(0);
               break;
        case 11:
                if(previous == "0")
                     {
                        previous=curr;
                     }else
                     {
                previous-=curr;
                     }
                prevOp=11;
                screenUpdate(0);
                break;
        case 12:
               
                if(previous == "0")
                {previous=1;}
                previous*=curr;
                prevOp=12;
                screenUpdate(0);
                break;
        case 13:
              
                 if(curr==0)
                 {
                     alert("Divide by Zero Exception");
                     screenUpdate(0);
                 }
                 else
                 {   if(previous == "0")
                     {
                        previous=curr;
                     }else{
                     previous/=curr;}
                     prevOp=13;
                     screenUpdate(0);
                 }
                 break;
        case 14:     
                doOperation(prevOp);    
                screenUpdate(previous);
                previous=0;
                break;
    }

    
}