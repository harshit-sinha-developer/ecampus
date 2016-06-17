window.onload=counter;


function counter()
{
seconds = 150;
countDown();
}	

function countDown(){
var minute=Math.floor(seconds/60);
var sec=(seconds%60);
var min_str="";
var sec_str="";
if(minute<=9)
{
	min_str="0"+minute;
}
else 
{
	min_str=minute;
}
if(sec<=9)
{
	sec_str="0"+sec;
}
else
{
	sec_str=sec;
}
document.getElementById("remain").innerHTML="Time Remaining: "+min_str+":"+sec_str;
setTimeout("countDown()",1000);
	if(seconds == 0)
		{
			document.forms[0].submit();
		}else {
		seconds--;		
		}
}


