 <?php
 	include_once("config.php");
	
	if(isset($_POST["email"])) {
		
		// check if is deactive
		$qry = "select user_id ,username from users where ( email = '".$_POST["email"]."' OR  username = '".$_POST["email"]."' ) AND password = '".md5($_POST["password"])."'  AND active=0";  
		$totalrec = mysqli_query($conn,$qry);
		$totalRecord = mysqli_num_rows($totalrec);
		
		 if($totalRecord) {
			 $arr = array('success' =>0, 'msg' => 'Not Active Yet');
			 echo json_encode($arr);exit;
		 }
	
		 else {
		 
			 // check user if is  active
		 	   $qry = "select user_id ,username from users where ( email = '".$_POST["email"]."' OR  username = '".$_POST["email"]."' ) AND password = '".md5($_POST["password"])."' AND active=1   "; 
			 $totalrec = mysqli_query($conn,$qry);
			 $totalRecord = mysqli_num_rows($totalrec);
			
			 $result = mysqli_fetch_assoc($totalrec);
	 
			 //session_start(); 
			 $_SESSION['uname'] = $result['username'];
			 $_SESSION['uid'] = $result['user_id'];
			 
			 if($totalRecord) {
				 $arr = array('success' =>1, 'msg' => 'Successfully login');
				 echo json_encode($arr);exit;
			 }
			 else{
				 $arr = array('success' =>0, 'msg' => 'invalid uname or password');
				 echo json_encode($arr);exit;
			 }
	  }
	  
	 	
	}
	 
	else {
		  
		 $arr = array('success' =>0, 'msg' => 'Error in submit data');
		 echo json_encode($arr);exit;
	}
	
 
?>
 