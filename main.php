
<html>
<head>
<title>Ayush Sudoku</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
  #topbar
  {
    font-size: 350%;
    color: #ffffff;
    background-color: #0000aa;
  }
  body
  {
    background-color: black;
  }
  
  .butt
  {
    font-size: 300%;
  }
  #abc
  {
    font-size: 300%;
    color: #ffffff;    
  }
</style>


</head>
  <body>



<!-- Fixed navbar -->
    <div class="container-fluid"  id="topbar">
    <div class="row">
    <div class="col-md-8">Sudoku Game</div>
    <div class="col-md-4">-By Ayush Gupta</div>
    </div>


    </div>


<!--    <div class="container-fluid" >
  <div class="jumbotron">
    <center><h1>Sudoku Game</h1> 
    <p>This is designed by me - Ayush Gupta.</p> 
	</center>  
  </div> 
</div>-->




<div class="container-fluid">


<center>
	
<div class="row" id="abc">
		<div class="col-md-offset-3 col-md-6">
    Choose the difficulty level....
    </div>
</div>
  <div class="row">
<div class="col-md-4">
<a href="/Easy"><button type="button" class="btn btn-primary"><p class="butt">Easy</p></button></a>
</div>
<div class="col-md-4">
<a href="/Medium"><button type="button" class="btn btn-success"><p class="butt">Medium</p></button></a>
</div>
<div class="col-md-4">
<a href="/Hard"><button type="button" class="btn btn-danger"><p class="butt">Hard</p></button></a>
</div>
</div>
<div class="row" id="abc">
    <div class="col-md-offset-3 col-md-6">
    OR
    </div>
<div class="row" id="abc">
    <div class="col-md-offset-4 col-md-4">
    <a href="/Solver">
    <button type="button" class="btn btn-warning"><p class="butt">Solve any Sudoku</p>
    </button>
    </a>
    </div>
    </div>


</center>


</div>
</div>    
  </body>
</html>