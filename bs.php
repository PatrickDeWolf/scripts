

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
