<?php 
if($_POST){    
	//$name=$_POST['name'];    
	$email=$_POST['email'];    
	//$text=$_POST['text'];       

	//send email    
	mail("plavetworld@gmail.com", "Zolaart new subscriber",    
		"Subscriber email:" . $email); 
} 
?>