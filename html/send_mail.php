<?php 
function sendElasticEmail($to, $subject, $body_text, $body_html, $from, $fromName)
{
    $res = "";
    $data = "username=".urlencode("zerobugacademy@gmail.com");
    $data .= "&api_key=".urlencode("b54aa5a1-32f8-44e4-9bb6-2bfee200cb8e");
    $data .= "&from=".urlencode($from);
    $data .= "&from_name=".urlencode($fromName);
    $data .= "&to=".urlencode($to);
    $data .= "&subject=".urlencode($subject);
    if($body_html)
      $data .= "&body_html=".urlencode($body_html);
    if($body_text)
      $data .= "&body_text=".urlencode($body_text);
	//echo "<pre>";print_r($data);die;
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

function student_registered_mail($mail_content)
{
$msg='<div style="font-family: arial;font-size:12px;" width="100%">
<div style="line-height:37px;">
	<div>
	<span>Name - '.$mail_content['name'].' </span><br/>
	
	<span>Mobile Number - '.$mail_content['mobile'].' </span><br/>
	
	<span>Email Id - '.$mail_content['email'].' </span><br/>
	
	Thank you for registering with Zerobug Academy.<br/>

Regards,<br/>

Admin,<br/>

Zerobug Academy,<br/>
 <br/></div><br/>';
$subject = 'New Student Enquiry Name is - '.$mail_content['name'];
sendElasticEmail('zerobugacademy@gmail.com',$subject,"",$msg,"vigneshbdreamz@gmail.com", "Zerobug Academy");
return true;	
}



?>