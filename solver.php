<!DOCTYPE html>
<html>
<head>
	<title>Ayush Sudoku</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
  #ayushgupta
  {
  	color: #00aa00;
  	font-size: 100%;
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
	var a=new Array(82);
	var b=new Array(82);
	var mz=0;

	for (mz=1; mz <82; mz++)
	{
		a[mz]=new Array(11);
		b[mz]=new Array(11);
	}
	var my=0;
	var mx=0;
    for(my=1;my<82;my++)
    {
    	a[my][0]=0;
    	a[my][10]=0;
    	for(mx=1;mx<10;mx++)
    	{
    		a[my][mx]=1;
    	}
    }
var mu=0;
var mp=0;
    for(mu=1;mu<82;mu++)
	{
		for(mp=1;mp<10;mp++)
		{
			b[mu][mp]=1;
		}
	}

	function myFunction()
	{
		//for(i=1;i<82;i++)
		//{
		//	var str1= "inpu";
    	//	var str2=i.toString();
    	//	var str3=str1.concat(str2);	
    	//	document.getElementById(str3).value=a[i][0];
		//}
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
	}
	

	function previous(block)
	{
		var im=0
		for(im=block-1; im>=1 ;im--)
		{
			if(a[im][10]===0)
			{
				return im;
			}
		}
		return 0;
	}

function block_possible (block)
{
	switch(block)
	{
		
			case 61:
				case 62:
					case 63:
						case 70:
							case 71:
								case 72:
									case 79:
										case 80:
											case 81:
			if(a[61][0]!==0)
			{
				b[block][a[61][0]]=0;
			}
			if(a[62][0]!==0)
			{
				b[block][a[62][0]]=0;
			}
			if(a[63][0]!==0)
			{
				b[block][a[63][0]]=0;
			}
			if(a[70][0]!==0)
			{
				b[block][a[70][0]]=0;
			}
			if(a[71][0]!==0)
			{
				b[block][a[71][0]]=0;
			}
			if(a[72][0]!==0)
			{
				b[block][a[72][0]]=0;
			}
			if(a[79][0]!==0)
			{
				b[block][a[79][0]]=0;
			}
			if(a[80][0]!==0)
			{
				b[block][a[80][0]]=0;
			}
			if(a[81][0]!==0)
			{
				b[block][a[81][0]]=0;
			}
			break;
					
			case 58:
				case 59:
					case 60:
						case 67:
							case 68:
								case 69:
									case 76:
										case 77:
											case 78:
			if(a[58][0]!==0)
			{
				b[block][a[58][0]]=0;
			}
			if(a[59][0]!==0)
			{
				b[block][a[59][0]]=0;
			}
			if(a[60][0]!==0)
			{
				b[block][a[60][0]]=0;
			}
			if(a[67][0]!==0)
			{
				b[block][a[67][0]]=0;
			}
			if(a[68][0]!==0)
			{
				b[block][a[68][0]]=0;
			}
			if(a[69][0]!==0)
			{
				b[block][a[69][0]]=0;
			}
			if(a[76][0]!==0)
			{
				b[block][a[76][0]]=0;
			}
			if(a[77][0]!==0)
			{
				b[block][a[77][0]]=0;
			}
			if(a[78][0]!==0)
			{
				b[block][a[78][0]]=0;
			}
			break;
			
			case 55:
				case 56:
					case 57:
						case 64:
							case 65:
								case 66:
									case 73:
										case 74:
											case 75:
			if(a[55][0]!==0)
			{
				b[block][a[55][0]]=0;
			}
			if(a[56][0]!==0)
			{
				b[block][a[56][0]]=0;
			}
			if(a[57][0]!==0)
			{
				b[block][a[57][0]]=0;
			}
			if(a[64][0]!==0)
			{
				b[block][a[64][0]]=0;
			}
			if(a[65][0]!==0)
			{
				b[block][a[65][0]]=0;
			}
			if(a[66][0]!==0)
			{
				b[block][a[66][0]]=0;
			}
			if(a[73][0]!==0)
			{
				b[block][a[73][0]]=0;
			}
			if(a[74][0]!==0)
			{
				b[block][a[74][0]]=0;
			}
			if(a[75][0]!==0)
			{
				b[block][a[75][0]]=0;
			}
			break;
			case 34:
				case 35:
					case 36:
						case 43:
							case 44:
								case 45:
									case 52:
										case 53:
											case 54:
			if(a[34][0]!==0)
			{
				b[block][a[34][0]]=0;
			}
			if(a[35][0]!==0)
			{
				b[block][a[35][0]]=0;
			}
			if(a[36][0]!==0)
			{
				b[block][a[36][0]]=0;
			}
			if(a[43][0]!==0)
			{
				b[block][a[43][0]]=0;
			}
			if(a[44][0]!==0)
			{
				b[block][a[44][0]]=0;
			}
			if(a[45][0]!==0)
			{
				b[block][a[45][0]]=0;
			}
			if(a[52][0]!==0)
			{
				b[block][a[52][0]]=0;
			}
			if(a[53][0]!==0)
			{
				b[block][a[53][0]]=0;
			}
			if(a[54][0]!==0)
			{
				b[block][a[54][0]]=0;
			}
			break;
					
			case 31:
				case 32:
					case 33:
						case 40:
							case 41:
								case 42:
									case 49:
										case 50:
											case 51:
			if(a[31][0]!==0)
			{
				b[block][a[31][0]]=0;
			}
			if(a[32][0]!==0)
			{
				b[block][a[32][0]]=0;
			}
			if(a[33][0]!==0)
			{
				b[block][a[33][0]]=0;
			}
			if(a[40][0]!==0)
			{
				b[block][a[40][0]]=0;
			}
			if(a[41][0]!==0)
			{
				b[block][a[41][0]]=0;
			}
			if(a[42][0]!==0)
			{
				b[block][a[42][0]]=0;
			}
			if(a[49][0]!==0)
			{
				b[block][a[49][0]]=0;
			}
			if(a[50][0]!==0)
			{
				b[block][a[50][0]]=0;
			}
			if(a[51][0]!==0)
			{
				b[block][a[51][0]]=0;
			}
			break;
			case 28:
				case 29:
					case 30:
						case 37:
							case 38:
								case 39:
									case 46:
										case 47:
											case 48:
			if(a[28][0]!==0)
			{
				b[block][a[28][0]]=0;
			}
			if(a[29][0]!==0)
			{
				b[block][a[29][0]]=0;
			}
			if(a[30][0]!==0)
			{
				b[block][a[30][0]]=0;
			}
			if(a[37][0]!==0)
			{
				b[block][a[37][0]]=0;
			}
			if(a[38][0]!==0)
			{
				b[block][a[38][0]]=0;
			}
			if(a[39][0]!==0)
			{
				b[block][a[39][0]]=0;
			}
			if(a[46][0]!==0)
			{
				b[block][a[46][0]]=0;
			}
			if(a[47][0]!==0)
			{
				b[block][a[47][0]]=0;
			}
			if(a[48][0]!==0)
			{
				b[block][a[48][0]]=0;
			}
			break;
			case 7:
				case 8:
					case 9:
						case 16:
							case 17:
								case 18:
									case 25:
										case 26:
											case 27:
			if(a[7][0]!==0)
			{
				b[block][a[7][0]]=0;
			}
			if(a[8][0]!==0)
			{
				b[block][a[8][0]]=0;
			}
			if(a[9][0]!==0)
			{
				b[block][a[9][0]]=0;
			}
			if(a[16][0]!==0)
			{
				b[block][a[16][0]]=0;
			}
			if(a[17][0]!==0)
			{
				b[block][a[17][0]]=0;
			}
			if(a[18][0]!==0)
			{
				b[block][a[18][0]]=0;
			}
			if(a[25][0]!==0)
			{
				b[block][a[25][0]]=0;
			}
			if(a[26][0]!==0)
			{
				b[block][a[26][0]]=0;
			}
			if(a[27][0]!==0)
			{
				b[block][a[27][0]]=0;
			}
			break;
			case 1:
				case 2:
					case 3:
						case 10:
							case 11:
								case 12:
									case 19:
										case 20:
											case 21:
			if(a[1][0]!==0)
			{
				b[block][a[1][0]]=0;
			}
			if(a[2][0]!==0)
			{
				b[block][a[2][0]]=0;
			}
			if(a[3][0]!==0)
			{
				b[block][a[3][0]]=0;
			}
			if(a[10][0]!==0)
			{
				b[block][a[10][0]]=0;
			}
			if(a[11][0]!==0)
			{
				b[block][a[11][0]]=0;
			}
			if(a[12][0]!==0)
			{
				b[block][a[12][0]]=0;
			}
			if(a[19][0]!==0)
			{
				b[block][a[19][0]]=0;
			}
			if(a[20][0]!==0)
			{
				b[block][a[20][0]]=0;
			}
			if(a[21][0]!==0)
			{
				b[block][a[21][0]]=0;
			}
			break;
			case 4:
				case 5:
					case 6:
						case 13:
							case 14:
								case 15:
									case 22:
										case 23:
											case 24:
			if(a[4][0]!==0)
			{
				b[block][a[4][0]]=0;
			}
			if(a[5][0]!==0)
			{
				b[block][a[5][0]]=0;
			}
			if(a[6][0]!==0)
			{
				b[block][a[6][0]]=0;
			}
			if(a[13][0]!==0)
			{
				b[block][a[13][0]]=0;
			}
			if(a[14][0]!==0)
			{
				b[block][a[14][0]]=0;
			}
			if(a[15][0]!==0)
			{
				b[block][a[15][0]]=0;
			}
			if(a[22][0]!==0)
			{
				b[block][a[22][0]]=0;
			}
			if(a[23][0]!==0)
			{
				b[block][a[23][0]]=0;
			}
			if(a[24][0]!==0)
			{
				b[block][a[24][0]]=0;
			}
			break;
			default:
			document.getElementById("demo").innerHTML="not possible";
			break;
	}
	
}
	function possible(block)
	{
		var ie=0;
		for(ie=1;ie<10;ie++)
		{
			b[block][ie]=1;
		}
		
		
		
		var r=Math.floor(block/9);
		if(block%9!==0)
		{
			r+=1;
		}
		var c=(block%9);
		if(c===0)
		{
			c=9;
		}
		//document.getElementById("demo").innerHTML=c;
		var ig=0;
		for( ig=1;ig<10;ig++)
		{
			if(a[ig+(r-1)*9][0]!==0)
			{
				b[block][ a[ig+(r-1)*9][0] ]=0;
			}
		}
		for(ig=1;ig<10;ig++)
		{
			if(a[c+(ig-1)*9][0]!==0)
			{
				b[block][ a[c+(ig-1)*9][0] ]=0;
			}
		}
		block_possible(block);
	}



	function solver()
	{
		document.getElementById("solvethis").disabled = true;
		//document.getElementById("demo").innerHTML="It started ";
		var ij=0;
		for(ij=1;ij<82;ij++)
		{
			//document.getElementById("demo").innerHTML="checking the box "+i+" for input ";
			var str1= "inpu";
    		var str2=ij.toString();
    		var str3=str1.concat(str2);	
    		if(document.getElementById(str3).value!=="")
    		{
    			possible(ij);
    			var her=0;
    			var allow=0;
    			for( her=1;her<10;her++)
				{
					if(b[ij][her]===1)
					{
						if(her==document.getElementById(str3).value)
							{
								allow=1;
							}
					}		
				}	

				if(allow==1)
				{
					a[ij][0]=document.getElementById(str3).value;
    				a[ij][10]=1;
    				document.getElementById(str3).readOnly=true;	
				}
				else
				{
					alert("You inputted the wrong sudoku....!!");
					location.reload();
				}
    			
    			//document.getElementById("demo").innerHTML=i;

    		}
		}




var i=0;
var k=0;
var ka=0;
var  kb =0;
	for(i=1;i<82;i++)
	{
		
		if(a[i][10]!==1)
		{
			var current=a[i][0];
			a[i][0]=0;
			possible(i);
			var num_poss=0;
			var last_poss=0;
			for( k=1;k<10;k++)
			{
				if(b[i][k]===1)
				{
					num_poss+=1;
					last_poss=k;
				}	
			}	
			if(num_poss===0)
			{
				a[i][0]=0;
				i=previous(i);//backtrack
				if(i===0)
				{
					//cout<<"not solvable...!!!";
					//document.getElementById("demo").innerHTML="not solvable...!!!";
					alert("This Sudoku does not have a solution..!!");
					location.reload();
					break;
					//return 0;
				}
				i=i-1;
				continue;
			}
			else
			{
				if(current===last_poss)
					{
						a[i][0]=0;
						i=previous(i);//backtrack
						if(i===0)
						{
							//cout<<"not solvable...!!!";
							//document.getElementById("demo").innerHTML="not solvable...!!!";
							alert("This Sudoku does not have a solution..!!");
							location.reload();
							break;
							//return 0;
						}
						i=i-1;
						continue;
					}	
				else
					{
						if(current===0)
						{
							for(ka=1;ka<10;ka++)
							{
								if(b[i][ka]===1)
								{
									a[i][0]=ka;
									break;
								}	
							}	
						}
						else
						{
							for(kb=1;kb<10;kb++)
							{
								if(b[i][kb]===1)
								{
									if(kb>current)
									{
										a[i][0]=kb;
										break;
									}
								}	
							}
							
						}
					}	
			}
		}
				
	}

var ia=0;
for(ia=1;ia<82;ia++)
		{
			//document.getElementById("demo").innerHTML="checking the box "+i+" for input ";
			var str1= "inpu";
    		var str2=ia.toString();
    		var str3=str1.concat(str2);	
    		if(a[ia][10]!==1)
    		{
    			document.getElementById(str3).value=a[ia][0];
    			document.getElementById(str3).readOnly=true;
    		}
    			
    			//document.getElementById("demo").innerHTML=i;

    		}
		}





</script>
</head>
<body onload="myFunction()">

<center>
<div class="jumbotron" id= "hidden_patti">

<div class="row" id="patti">
  	<div class="col-md-3">
  	<button type="button" class="btn btn-danger" onclick="solver()" id="solvethis">Solve this Sudoku...!!!</button>
  </div>
<div class="col-md-3">
<p id="ayushgupta">
This Sudoku tells you if the puzzle you entered is solvable or not...!!! If it is solvable then it solves the sudoku with the any one possible way...!!!
</p>
</div>
<div class="col-md-3">
  	<button type="button" class="btn btn-primary" onclick="location.reload()" id="solveanother">Solve Another Sudoku</button>
  </div>
  <div class="col-md-3">
  	<a href="/"><button type="button" class="btn btn-warning" id="solveanother">Go back to the Main Menu</button></a>
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
