var gameScene=[[0,0,0],[0,0,0],[0,0,0]];
var currPlayer=0;
function resetGame()
{
    document.getElementById("aa").disabled=false;
    document.getElementById("bb").disabled=false;
    document.getElementById("cc").disabled=false;
    document.getElementById("ab").disabled=false;
    document.getElementById("ac").disabled=false;
    document.getElementById("ba").disabled=false;
    document.getElementById("bb").disabled=false;
    document.getElementById("bc").disabled=false;
    document.getElementById("cb").disabled=false;
    document.getElementById("ca").disabled=false;
    document.getElementById("aa").value="   ";
    document.getElementById("ab").value="   ";
    document.getElementById("ac").value="   ";
    document.getElementById("ba").value="   ";
    document.getElementById("bb").value="   ";
    document.getElementById("bc").value="   ";
    document.getElementById("ca").value="   ";
    document.getElementById("cb").value="   ";
    document.getElementById("cc").value="   ";
    for(i=0;i<3;i++)
    {
        for(j=0;j<3;j++)
        {
            gameScene[i][j]=0;
        }
    }
   
}
function checkScene(a)
{
// Checks;
if((gameScene[0][0]==a && gameScene[1][0]==a && gameScene[2][0]==a) || (gameScene[0][1]==a && gameScene[1][1]==a && gameScene[2][1]==a) || (gameScene[0][2]==a && gameScene[1][2]==a && gameScene[2][2]==a)
|| (gameScene[0][0]==a && gameScene[0][1]==a && gameScene[0][2]==a) || (gameScene[1][0]==a && gameScene[1][1]==a && gameScene[1][2]==a) || (gameScene[2][0]==a && gameScene[2][1]==a && gameScene[2][2]==a) 
|| (gameScene[0][0]==a && gameScene[1][1]==a && gameScene[2][2]==a) || (gameScene[0][2]==a && gameScene[1][1]==a && gameScene[2][0]==a))
{
    return 1;
}
return 0;
}
function checkDraw()    
{
    for(i=0;i<3;i++)
    {
        for(j=0;j<3;j++)
        {
            if(gameScene[i][j]==0)
            {
                return 1;
            }
        }
    }
    return 0;
}
function updateGameData(posx,posy,i)
{
    if(currPlayer==0)
    {
    gameScene[posx][posy]=1;
    }
    if(currPlayer==1)
    {
    gameScene[posx][posy]=2;
    }
    if(checkScene(1)==1)
    {
        alert("Player 1 Wins");
        resetGame();
        
    }else if(checkScene(2)==1)
    {
        alert("Player 2 Wins");
        resetGame();
        
    }
    else{
    if(currPlayer==0)
    {
        document.getElementById(i).value="X";
        currPlayer=1;
    }
    else
    {
        currPlayer=0;
        document.getElementById(i).value="O";
    }
    document.getElementById(i).disabled=true;
}
if(checkDraw()==0)
{
   alert("Draw !");
   resetGame();
}
}