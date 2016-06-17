<div class="banner" onMouseOver="abc()" onMouseOut="def()">
    <div class="left">
    <img id="left" src="images/left.jpg" onClick="myfun2()" style="border-radius:30px;">
    </div>
    <div class="right">
    <img id="right" src="images/right.jpg" onClick="myfun()" style="border-radius:30px;">
    </div>
    <a id="z" href="about.html">
    <img  id="a" src ="images/1.jpg" >
    </a>
    <a id="za" href="about.html">
    <div class="txt">
    <h2 id="txt1">About Us</h2>
    </div></a>
   
</div>
<script>
    var img1="images/1.jpg";
	var img2="images/2.jpg";
	var img3="images/3.jpg";
	var img4="images/4.jpg";
	var img_c=img1;
	var t = document.getElementById("a");
	var t1= document.getElementById("txt1");
        var t2= document.getElementById("z");
        var t3= document.getElementById("za");
	var x ;
	function def()
	{
		x = setInterval(function(){myfun()},2100);
	}
	function abc()
	{
		clearInterval(x);
	}
	function myfun()
	{
		
		if(img_c == img1)
		{
			img_c = img2;
			t1.innerHTML="Home";
                        t2.href="index.php";
                        t3.href="index.php";
		}
		else if(img_c == img2)
		{
			img_c = img3;
			t1.innerHTML="Test";
                        t2.href="take_test.php";
                        t3.href="take_test.php";
		}
		else if(img_c == img3)
		{
			img_c = img4;
			t1.innerHTML="Login";
                        t2.href="login.php";
                        t3.href="login.php";
		}
		else
		{
			img_c = img1;
			t1.innerHTML="About Us";
                        t2.href="about.html";
                        t3.href="about.html";
		}
		t.src = img_c;
	}
	function myfun2()
	{
		
		if(img_c == img1)
		{
			img_c = img4;
			t1.innerHTML="Login";
                        t2.href="login.php";
		}
		else if(img_c == img2)
		{
			img_c = img1;
			t1.innerHTML="About Us";
                        t2.href="about.html";
		}
		else if(img_c == img3)
		{
			img_c = img2;
			t1.innerHTML="Home";
                        t2.href="index.php";
          
		}
		else
		{
			img_c = img3;
			t1.innerHTML="Tests";
                        t2.href="take_test.php";
		}
		t.src = img_c;
	}
	
	
		
	def();
</script>

