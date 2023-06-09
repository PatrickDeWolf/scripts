

<!DOCTYPE html>
<html lang='en'>
<head>
  <title></title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
  <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class='container'>
 
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
</ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
		      
		      
		      
		      
                      
                      
  <a href="#" data-toggle="modal"  data-target='#myModal'>Toggle popover</a>
  <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Open Modal</button>
  <div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title'><b>Modal Header</b></h4>
        </div>
        <div class='modal-body'>
        <p>Some text in the modal.</p>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Sluit</button>
        </div>
      </div>
    </div>
  </div>

                                                                          
<?php
echo uniqid();
?>
 

									  
									  
									  
<?php
function passwordregex()
{	echo"<div class='row'>";
		echo"<div class='input-group col-xs-6'>";
		echo"<small>Gelieve uw wachtwoord te herhalen.</small>";
		echo"<input type='text' class='col-sm-6 form-control' id='pw1' onkeyup=\"pwdncheck('pw1','pw2','pwknop1')\">";
		echo"<span class='input-group-addon' STYLE='background-color:transparent; border:0px;'>";
		echo"<i class='glyphicon glyphicon-ok' id='pw1ok' STYLE='color:transparent;'></i></span>";
		echo"</div>";
		echo"<div class='input-group col-xs-6'>";
		echo"<small>Gelieve uw wachtwoord te herhalen.</small>";
		echo"<input type='text' class='col-sm-6 form-control' id='pw2' onkeyup=\"pwdncheck('pw1','pw2','pwknop1')\">";
		echo"<span class='input-group-addon' STYLE='background-color:transparent; border:0px;'>";
		echo"<i class='glyphicon glyphicon-ok' id='pw2ok' STYLE='color:transparent;'></i></span>";
		echo"</div>"; 
	echo"</div>";
	echo"<div class='row'>";
		echo"<div class='col-xs-12'>";
			echo"<button id='pwknop1' class='btn btn-primary' disabled>wijzig</button>";
		echo"</div>";
	echo"</div>";
	echo"<script>
	function pwdncheck(pw1,pw2,knop)
	{	var pw1_val=document.getElementById(pw1).value;
		var pw2_val=document.getElementById(pw2).value;		
		var strongRegex = new RegExp(\"^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})\");
		if(strongRegex.test(pw1_val) ==false)
		{	document.getElementById('pw1ok').style.color='transparent';
			document.getElementById('pw2ok').style.color='transparent';
		}else{
			document.getElementById('pw1ok').style.color='green';
			if(pw1_val==pw2_val)
			{	document.getElementById('pw2ok').style.color='green';
				document.querySelector('#'+knop).disabled = false;
			}else{
				document.getElementById('pw2ok').style.color='transparent';
				document.querySelector('#'+knop).disabled = true;
			}
		}
	}
	</script>";
}
passwordregex();
?>
									  
									  
									  
									  
									  
<div class='panel-group' id='accordion'>
	<div class='panel panel-default'>
		<div class='panel-heading'>
		<h4 class='panel-title'>
		<a data-toggle='collapse' data-parent='#accordion' href='#collapse1'>
		Collapsible Group 1</a>
		</h4>
		</div>
		
		<div id='collapse1' class='panel-collapse collapse in'>
			<div class='panel-body'>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
			minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			commodo consequat.
			</div>
		</div>
	</div>
	
	<div class='panel panel-default'>
		<div class='panel-heading'>
		<h4 class='panel-title'>
		<a data-toggle='collapse' data-parent='#accordion' href='#collapse2'>
		Collapsible Group 2</a>
		</h4>
		</div>
		
		<div id='collapse2' class='panel-collapse collapse'>
			<div class='panel-body'>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
			minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
			commodo consequat.
			</div>
		</div>
	</div>
	
</div>         
					       
					       
					       
                                                                          
<script>
		function extert()
		{ //var waarde=document.getElementById("email").value;	
      var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			   if(this.responseText==1)
				{	
				}
			   if(this.responseText==0)
				{	
        }
			}
		};
		xhttp.open("GET", "./verwerk.php?t="+waarde	, true);
		xhttp.send(); 
		}
		//extert();
		</script>                                                                          
                                                                          
</div>
</body>
</html>




?>
