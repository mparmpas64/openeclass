
<?php
if (!session_id()) { session_start(); }

if (!isset($_SESSION["token"])) {

	function generateToken($length){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$token = '';

	    for ($i = 0; $i < $length; $i++) {
	        $token .= $characters[mt_rand(0, strlen($characters) - 1)];
	    }

	    return $token;
	}	

	$_SESSION['token']=generateToken(24);
}

if ( isset($_REQUEST["token"]) ) {
	//echo "<script> alert( 'request: ".$_POST["token"].", session: ". $_SESSION["token"]."') </script>";
	//die;
	if( $_REQUEST["token"] != $_SESSION["token"] ) {
		echo "Wrong token! Bad Guy Alert!";
		die;
	}
} 

?>