<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="dataDisplay.js"></script>
<style>
.lbltext
{
	font-size:16px;
	text-align:center;
}

</style>
<div class="container" style="background-color:#FCF8E3">
    <div class="row">
		  <ul class="nav nav-tabs">
			<li ><a href="addperson.php">Add Person</a></li>
			<li><a href="addplace.php">Add Place</a></li>
			<li class="active"><a href="addanimal.php">Add Animal</a></li>
			<li><a href="homePage.php">Bring Me Home</a></li>
		  </ul>
	</div>
</div>
	<div class="col-md-12" style="margin-top:5px;">
		<div class="col-md-6">
			<div class="panel panel-default" style="background-color: aliceblue;">
				<div class="panel-body" >		
					<div class="row">
						<label class="col-md-3 lbltext">Animal Name </label>
						<div class="col-md-3">
							<input type="text" class="col-sm-4 form-control" id="addField" placeholder="Favourite Animal Name">
                            <span id="checkName" style="align-text:center"></span>
						</div>
						<div class="col-md-3">
							<div class="preview">
							</div>
						</div>
				    </div>					
					<div class="row">
						<div class="col-md-4" style="text-align:center;margin-left: 67px; ">					
							<input type="button" value="Submit" class="btn" onclick="validation('animal')" style="margin-top: 31px;background-color:antiquewhite;">
										
							
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
					<div class="panel panel-default"  style="background-color: aliceblue;">
						<div class="panel-body showDataHere">
						</div>
					</div>
                         
		</div> 
</div>
