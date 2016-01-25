<?php 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ayush Sudoku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style type="text/css">
  #hidden_patti
  {
  	display: none;
  }
  table
  {
  border: 1px solid black;
  }

  td
  {
  	margin-left: 10%;
  	margin-right: 10%;  

  }
	input
	{
		height: 60px;
		width:60px;
	  	font-size: 250%;
	  	
	}
	body
	{
		background-color: black;
	}
  </style>
  <script type="text/javascript">
  	var wrong=0;
	var right=0;
	var c = 0;
	var t;
	var timer_is_on = 0;

	function timedCount() {
	    document.getElementById("time").innerHTML= c;
	    c = c+1;
	    t=setTimeout(function(){timedCount()}, 1000);
	}

	//function doTimer() {
	//    if (!timer_is_on) 
	//    {
	//        timer_is_on = 1;
	//        timedCount();
	//   }
	//}
	function stopCount() 
	{
	    clearTimeout(t);
	    timer_is_on = 0;
	}
	//var e=[0,9,9,9,9,9,9,7,8,9,8,8,8,8,8,8,7,8,8,7,7,7,7,7,7,7,7,7,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9];
	//var f = [0,9,9,9,9,9,9,7,8,9,8,8,8,8,8,8,7,8,8,7,7,7,7,7,7,7,7,7,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9];
 	







 	var a =[0,4,3,5,2,6,9,7,8,1,6,8,2,5,7,1,4,9,3,1,9,7,8,3,4,5,6,2,8,2,6,1,9,5,3,4,7,3,7,4,6,8,2,9,1,5,9,5,1,7,4,3,6,2,8,5,1,9,3,2,6,8,7,4,2,4,8,9,5,7,1,3,6,7,6,3,4,1,8,2,5,9];
  	var b =[0,0,0,0,2,6,0,7,0,1,6,8,0,0,7,0,0,9,0,1,9,0,0,0,4,5,0,0,8,2,0,1,0,0,0,4,0,0,0,4,6,0,2,9,0,0,0,5,0,0,0,3,0,2,8,0,0,9,3,0,0,0,7,4,0,4,0,0,5,0,0,3,6,7,0,3,0,1,8,0,0,0];

 	function swap_row(p,q)
 	{
 		for(j=1;j<10;j++)
 		{
 			var dummy = a[9*(p-1)+j];
 			a[9*(p-1)+j]=a[9*(q-1)+j];
 			a[9*(q-1)+j]=dummy;

 			dummy = b[9*(p-1)+j];
 			b[9*(p-1)+j]=b[9*(q-1)+j];
 			b[9*(q-1)+j]=dummy;
 		}
 	}
 	function swap_col(p,q)
 	{
 		for(j=1;j<10;j++)
 		{
 			var dummyc = a[9*(j-1)+p];
 			a[9*(j-1)+p]=a[9*(j-1)+q];
 			a[9*(j-1)+q]=dummyc;

 			dummyc = b[9*(j-1)+p];
 			b[9*(j-1)+p]=b[9*(j-1)+q];
 			b[9*(j-1)+q]=dummyc;
 		}
 	}
  function myFunction()
  {
  	var rando1=Math.floor(3*Math.random());
  	switch (rando1) 
  	{
    case 0:
        swap_row(1,2);
        break;
    case 1:
        swap_row(1,3);
        break;
    case 2:
        swap_row(2,3);
        break;
	}
var rando2=Math.floor(3*Math.random());
  	switch (rando2) 
  	{
    case 0:
        swap_row(4,5);
        break;
    case 1:
        swap_row(4,6);
        break;
    case 2:
        swap_row(5,6);
        break;
	}
var rando3=Math.floor(3*Math.random());
  	switch (rando3) 
  	{
    case 0:
        swap_row(7,8);
        break;
    case 1:
        swap_row(7,9);
        break;
    case 2:
        swap_row(8,9);
        break;
	}
var rando4=Math.floor(3*Math.random());
  	switch (rando4) 
  	{
    case 0:
        swap_col(1,2);
        break;
    case 1:
        swap_col(2,3);
        break;
    case 2:
        swap_col(1,3);
        break;
	}

var rando5=Math.floor(3*Math.random());
  	switch (rando5) 
  	{
    case 0:
        swap_col(4,5);
        break;
    case 1:
        swap_col(5,6);
        break;
    case 2:
        swap_col(4,6);
        break;
	}
var rando6=Math.floor(3*Math.random());
  	switch (rando6) 
  	{
    case 0:
        swap_col(7,8);
        break;
    case 1:
        swap_col(8,9);
        break;
    case 2:
        swap_col(7,9);
        break;
	}
var rando7=Math.floor(3*Math.random());
  	switch (rando7) 
  	{
    case 0:
        swap_row(1,4);
        swap_row(2,5);
        swap_row(3,6);
        break;
    case 1:
        swap_row(4,7);
        swap_row(5,8);
        swap_row(6,9);
        break;
    case 2:
        swap_row(1,7);
        swap_row(2,8);
        swap_row(3,9);
        break;
	}
var rando8=Math.floor(3*Math.random());
  	switch (rando8) 
  	{
    case 0:
        swap_col(1,4);
        swap_col(2,5);
        swap_col(3,6);
        break;
    case 1:
        swap_col(4,7);
        swap_col(5,8);
        swap_col(6,9);
        break;
    case 2:
        swap_col(1,7);
        swap_col(2,8);
        swap_col(3,9);
        break;
	}
var rando9=Math.floor(1+9*Math.random());
var rando10=Math.floor(1+9*Math.random());
  	if(rando9!=rando10)
  	{
  		for (i = 1; i < 82; i++)
  		{
  			if(a[i]==rando9)
  			{
  				a[i]=rando10;
  			}
  			else
  			{
  				if(a[i]==rando10)
  				{
  					a[i]=rando9;
  				}
  			}
  		}
  		for (i = 1; i < 82; i++)
  		{
  			if(b[i]==rando9)
  			{
  				b[i]=rando10;
  			}
  			else
  			{
  				if(b[i]==rando10)
  				{
  					b[i]=rando9;
  				}
  			}
  		}
  	}



  	if (!timer_is_on) 
	    {
	        timer_is_on = 1;
	        timedCount();
	    }
  	for (i = 1; i < 82; i++) //colouring the sudoku
  	{
  		var str1= "inpu";
    	var str2=i.toString();
    	var str3=str1.concat(str2);
    	if(i<=27 || i>54)
    	{
	    		if(i%9 <=3 || i%9>=7)
	    	{
	    		document.getElementById(str3).style.backgroundColor = "lightgrey";
	    	}
	    	else
	    	{
	    		document.getElementById(str3).style.backgroundColor = "white";
	    	}	
    	}
    	else
    	{
    		if(i%9 <=3 || i%9>=7)
	    	{
	    		document.getElementById(str3).style.backgroundColor = "white";
	    	}
	    	else
	    	{
	    		document.getElementById(str3).style.backgroundColor = "lightgrey";
	    	}	
    	}
    	


  	}

  	for (i = 1; i < 82; i++) 
  	{

    	if(b[i]==0)
    	{
    		//document.getElementById("puzz1").readOnly = false;
    		var str1= "inpu";
    		var str2=i.toString();
    		var str3=str1.concat(str2);
    		
    		document.getElementById(str3).value="";
    	}
    	else
    	{
    		var str1= "inpu";
    		var str2=i.toString();
    		var str3=str1.concat(str2);
    		document.getElementById(str3).value=a[i];
    		document.getElementById(str3).readOnly = true;
    	}
	}
  }
  function submit()
  {
  	for(i=1;i<82;i++)
  	{
  		if(b[i]==0)
  		{
  			var str1= "inpu";
    		var str2=i.toString();
    		var str3=str1.concat(str2);
  			if(document.getElementById(str3).value==a[i])
  			{
  				document.getElementById(str3).style.backgroundColor = "green";
  				right+=1;
  			}
  			else
  			{
  				if(document.getElementById(str3).value!="")
  				{
  					document.getElementById(str3).style.backgroundColor = "red";
  					wrong+=1;
  				}
  				
  			}
  		}
  	}

  //	var score=right-wrong;
  	//var aler1="Right Attempts: ";
  	//var aler2=right.toString();
  	//var aler3=aler1.concat(aler2);
  	//var aler4="Wrong Attempts: ";
  	//var aler5=wrong.toString();
  	//var aler6=aler4.concat(aler5);
  	//var aler7=score.toString();
  	//var aler8="Your Score: ";
  	//var aler9=aler8.concat(aler7);
  	//var aler10="Do You want to see the solution??";
  	//var aler11=aler3.concat(aler6);
  	//var aler12=aler11.concat(aler8);
  	//var aler13=aler12.concat(aler10);
  	//if (confirm(aler3+"\n"+aler6+"\n"+aler9+"\n"+aler10 ) == true) 
  	//{
    //   solution();
    //} 
    //else 
    //{
    //	stopCount();
    //    location.assign("/");
    //}
    stopCount();
    document.getElementById("rightat").innerHTML=right;
    document.getElementById("wrongat").innerHTML=wrong;
    document.getElementById("patti").style.display="none";
	document.getElementById("hidden_patti").style.display="initial";

}
function solution()
{

	for(i=1;i<82;i++)
	{
		if(b[i]==0)
		{
			var str1= "inpu";
    		var str2=i.toString();
    		var str3=str1.concat(str2);
  			document.getElementById(str3).value=a[i];
  			document.getElementById(str3).style.backgroundColor = "lightblue";	
		}
	}
	document.getElementById("myBtn").disabled = true;
	document.getElementById("submitbutt").disabled = true;
	
}

  </script>
<style type="text/css">
#dtime
{
	color: red;
}

</style>
</head>
<body onload="myFunction()">
<center>
<div class="jumbotron">

<div class="row" id="patti">
  <div class="col-md-2" id="dtime">
  <p>
  Time Elapsed:
  </p>
  </div>
<div class="col-md-2" id="dtime">
  <p id="time">
    
  </p>
  </div>
  <div class="col-md-2">
  <button type="button" class="btn btn-warning" onclick="submit()" id="submitbutt">Submit</button>
</div>
  <div class="col-md-2">
  <button type="button" class="btn btn-success" onclick="solution()" id="myBtn">Get Solution</button>
</div>
<div class="col-md-2">
  <button type="button" class="btn btn-primary" onclick="location.reload();">Replay this Level</button>
</div>
<div class="col-md-2">
  <a href="/"><button type="button" class="btn btn-danger">Go back to the main page</button></a></div>

    </div>
    


<div class="jumbotron" id= "hidden_patti">

<div class="row" id="patti">
  
  <div class="col-md-2" id="dtime">
  <p>
  Right Attempts:
  </p>
  </div>
<div class="col-md-1">
  <p id="rightat">
    
  </p>
  </div>
  <div class="col-md-2" id="dtime">
  <p>
  Wrong attempts:
  </p>
  </div>
<div class="col-md-1">
  <p id="wrongat">
    
  </p>
  </div>
<div class="col-md-2">
 <button type="button" class="btn btn-success" onclick="solution()"id="myBtn">Show Solution</button>
</div>
  <div class="col-md-2">
  <button type="button" class="btn btn-primary" onclick="location.reload();">Replay this Level</button>
</div>
<div class="col-md-2">
  <a href="/"><button type="button" class="btn btn-danger">Go back to the main page</button></a>
</div>

    </div>
</div>



</div>

<table>
	<tr>
		<td id="cell1">
		<input id="inpu1" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell2">
		<input id="inpu2" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell3">
		<input id="inpu3" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell4">
		<input id="inpu4" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell5">
		<input id="inpu5" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell6">
		<input id="inpu6" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell7">
		<input id="inpu7" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell8">
		<input id="inpu8" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell9">
		<input id="inpu9" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell10">
		<input id="inpu10" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell11">
		<input id="inpu11" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell12">
		<input id="inpu12" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell13">
		<input id="inpu13" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell14">
		<input id="inpu14" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell15">
		<input id="inpu15" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell16">
		<input id="inpu16" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell17">
		<input id="inpu17" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell18">
		<input id="inpu18" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell19">
		<input id="inpu19" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell20">
		<input id="inpu20" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell21">
		<input id="inpu21" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell22">
		<input id="inpu22" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell23">
		<input id="inpu23" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell24">
		<input id="inpu24" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell25">
		<input id="inpu25" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell26">
		<input id="inpu26" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell27">
		<input id="inpu27" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell28">
		<input id="inpu28" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell29">
		<input id="inpu29" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell30">
		<input id="inpu30" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell31">
		<input id="inpu31" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell32">
		<input id="inpu32" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell33">
		<input id="inpu33" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell34">
		<input id="inpu34" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell35">
		<input id="inpu35" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell36">
		<input id="inpu36" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell37">
		<input id="inpu37" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell38">
		<input id="inpu38" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell39">
		<input id="inpu39" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell40">
		<input id="inpu40" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell41">
		<input id="inpu41" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell42">
		<input id="inpu42" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell43">
		<input id="inpu43" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell44">
		<input id="inpu44" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell45">
		<input id="inpu45" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell46">
		<input id="inpu46" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell47">
		<input id="inpu47" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell48">
		<input id="inpu48" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell49">
		<input id="inpu49" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell50">
		<input id="inpu50" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell51">
		<input id="inpu51" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell52">
		<input id="inpu52" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell53">
		<input id="inpu53" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell54">
		<input id="inpu54" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell55">
		<input id="inpu55" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell56">
		<input id="inpu56" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell57">
		<input id="inpu57" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell58">
		<input id="inpu58" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell59">
		<input id="inpu59" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell60">
		<input id="inpu60" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell61">
		<input id="inpu61" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell62">
		<input id="inpu62" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell63">
		<input id="inpu63" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell64">
		<input id="inpu64" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell65">
		<input id="inpu65" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell66">
		<input id="inpu66" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell67">
		<input id="inpu67" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell68">
		<input id="inpu68" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell69">
		<input id="inpu69" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell70">
		<input id="inpu70" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell71">
		<input id="inpu71" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell72">
		<input id="inpu72" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
	<tr>
		<td id="cell73">
		<input id="inpu73" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell74">
		<input id="inpu74" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell75">
		<input id="inpu75" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell76">
		<input id="inpu76" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell77">
		<input id="inpu77" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell78">
		<input id="inpu78" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell79">
		<input id="inpu79" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell80">
		<input id="inpu80" type="number" min="1" max="9">

		</input>
		</td>
		<td id="cell81">
		<input id="inpu81" type="number" min="1" max="9">

		</input>
		</td>
	</tr>
</table>
</center>
</body>
</html>

