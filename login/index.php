<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

 <script>
	function checklogin() {
			var email = $("#email").val();	// site url	 
		 	var password = $("#password").val();  // hidden value

			var i;
			$.ajax({
			type: "POST",			
			data:{ 
						email:email,
						password:password
				 },
		
			url: "checklogin.php",
		     async : false,
			success: function(data){
			
			    var data = JSON.parse(data);	

			 if(data.success==1){
				 				 
				     // $(".alert").addClass("alert-success").removeClass("alert-warning");

					 $(".alert-success").css({"display":"block"});
					 $(".alert-success").html(data.msg);  
					
					 setTimeout(function () {
						$("#regitration_form").submit();//will redirect to your blog page (an ex: blog.html)
					 }, 500); //will call the function after 2 secs. (2000)
				  
			 }
			 else{				 
				 // $(".alert").addClass("alert-warning").removeClass("alert-success");
				  $(".alert-danger").css({"display":"block"});					 
				  $(".alert-danger").html(data.msg);
				  return false;
			 }
			 
            }
			
      });
	  
  }

</script>


  
 
<body>

<div class="container">
  <h2>Login</h2>
 
  <div class="alert alert-danger" style="display: none;">  </div>
  <div class="alert alert-warning" style="display: none;">  </div>
  <div class="alert alert-success" style="display: none;"> </div>



  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="regitration_form"  action="main.php"  name="regitration_form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
         <input type="hidden" name="id" value="0">
        <button type="button" class="btn btn-default check" onClick="return checklogin();" >Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
