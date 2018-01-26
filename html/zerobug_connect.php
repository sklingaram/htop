<?php 
include("dbconnection.php");

/*connection login insert*/
if(isset($_REQUEST['action_type']) && $_REQUEST['action_type'] == 'footer_submit') 
{
	//print_r($_REQUEST['action_type']);
	$user_name=$_REQUEST['data_params']['username'];
	$mobile_no=$_REQUEST['data_params']['mobileno'];
	$email=$_REQUEST['data_params']['email'];
	$message=$_REQUEST['data_params']['content'];
	$course=$_REQUEST['data_params']['course'];
	
	function sendElasticEmail($to, $subject, $body_text, $body_html, $from, $fromName)
 {
   $res = "";
     $data = "username=".urlencode("digitalfibernet.info@gmail.com");
   $data .= "&api_key=".urlencode("64ac867f-3d39-4508-8a13-8c2ff7c78f34");
   $data .= "&from=".urlencode($from);
   $data .= "&from_name=".urlencode($fromName);
   $data .= "&to=".urlencode($to);
   $data .= "&subject=".urlencode($subject);
   if($body_html)
     $data .= "&body_html=".urlencode($body_html);
   if($body_text)
     $data .= "&body_text=".urlencode($body_text);
    
   $header = "POST /mailer/send HTTP/1.0\r\n";
   $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
   $header .= "Content-Length: " . strlen($data) . "\r\n\r\n";
   $fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30);

   if(!$fp)
     return "ERROR. Could not open connection";
   else {
     fputs ($fp, $header.$data);
     while (!feof($fp)) {
       $res .= fread ($fp, 1024);
     }
     fclose($fp);
   }
   return $res;                  
}
//Email  
function pdf_mail($to_mail,$file_name,$invoice_name,$user_name,$mobile_no,$course,$email,$message)
{
    $msg='<div style="font-family: arial;font-size:12px;" width="100%">
    <div style="line-height:37px;">
    <div>Dear '.$invoice_name.',<br/>Name : '.$user_name.' <br/>Mobile No : '.$mobile_no.' <br/>E-mail id : '.$email.' <br/>Course : '.$course.' <br/>Address : '.$message.' <br/></div>
    Regards,<br/>
    Admin,<br/>

    Zerobugacademy

   </div>';

    $subject = "Enquiry";

    $res = sendElasticEmail($to_mail,$subject,"",$msg,"digitalfibernet.info@gmail.com","Zerobugacademy Enquiry");
    return $res;
}

$to_mail="zerobugacademy.info@gmail.com";
$file_name="myfile";
$invoice_name="ZBS";
$invoice_mail=pdf_mail($to_mail,$file_name,$invoice_name,$user_name,$mobile_no,$course,$email,$message);
	

 $statement = $DB_con->prepare("insert into zerobug_users(zerobug_enquiry_name,zerobug_enquiry_mobileno,zerobug_enquiry_email,zerobug_enquiry_message)
             VALUES(?,?,?,?)");
   $result=$statement->execute(array($user_name,$mobile_no,$email,$message));

   if($result)
   {
	echo json_encode(array('success'=>true)); 
   }
   else{
	   echo json_encode(array('success'=>false));
   }
}




if(isset($_REQUEST['action_type']) && $_REQUEST['action_type'] == 'pop_up') 
{
	
	$user_name=$_REQUEST['data_params']['username'];
	$mobile_no=$_REQUEST['data_params']['mobileno'];
	$email=$_REQUEST['data_params']['email'];
	$message=$_REQUEST['data_params']['content'];
	$course=$_REQUEST['data_params']['course'];	
	
	function sendElasticEmail($to, $subject, $body_text, $body_html, $from, $fromName)
 {
   $res = "";
     $data = "username=".urlencode("digitalfibernet.info@gmail.com");
   $data .= "&api_key=".urlencode("64ac867f-3d39-4508-8a13-8c2ff7c78f34");
   $data .= "&from=".urlencode($from);
   $data .= "&from_name=".urlencode($fromName);
   $data .= "&to=".urlencode($to);
   $data .= "&subject=".urlencode($subject);
   if($body_html)
     $data .= "&body_html=".urlencode($body_html);
   if($body_text)
     $data .= "&body_text=".urlencode($body_text);
    
   $header = "POST /mailer/send HTTP/1.0\r\n";
   $header .= "Content-Type: application/x-www-form-urlencoded\r\n";
   $header .= "Content-Length: " . strlen($data) . "\r\n\r\n";
   $fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30);

   if(!$fp)
     return "ERROR. Could not open connection";
   else {
     fputs ($fp, $header.$data);
     while (!feof($fp)) {
       $res .= fread ($fp, 1024);
     }
     fclose($fp);
   }
   return $res;                  
}
//Email  
function pdf_mail($to_mail,$file_name,$invoice_name,$user_name,$mobile_no,$course,$email,$message)
{
    $msg='<div style="font-family: arial;font-size:12px;" width="100%">
    <div style="line-height:37px;">
    <div>Dear '.$invoice_name.',<br/>Name : '.$user_name.' <br/>Mobile No : '.$mobile_no.' <br/>E-mail id : '.$email.' <br/>Course : '.$course.' <br/>Address : '.$message.' <br/></div>
    Regards,<br/>
    Admin,<br/>

    Zerobugacademy

   </div>';

    $subject = "Enquiry";

    $res = sendElasticEmail($to_mail,$subject,"",$msg,"digitalfibernet.info@gmail.com","Zerobugacademy Enquiry");
    return $res;
}

$to_mail="zerobugacademy.info@gmail.com";
$file_name="myfile";
$invoice_name="ZBS";
$invoice_mail=pdf_mail($to_mail,$file_name,$invoice_name,$user_name,$mobile_no,$course,$email,$message);
	

 $statement = $DB_con->prepare("insert into zerobug_users(zerobug_enquiry_name,zerobug_enquiry_mobileno,zerobug_enquiry_email,zerobug_enquiry_message)
             VALUES(?,?,?,?)");
   $result=$statement->execute(array($user_name,$mobile_no,$email,$message));

   if($result)
   {
	echo json_encode(array('success'=>true)); 
   }
   else{
	   echo json_encode(array('success'=>false));
   }
}





?>
							
							
							