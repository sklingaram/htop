<?php include "connect.php"; 
 include "send_mail.php";
?>
<?php 
if($_REQUEST['action_type']=="save")
{
	if(!empty($_REQUEST['name']))
	{
		$table_name="bems_user_enquiry";
		$field_name = 'enquiry_name,enquiry_emailid,enquiry_contact,enquiry_course,enquiry_comments';
		$values_keys='?,?,?,?,?';
		$field_values = array($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['mobile_num'],$_REQUEST['course'],$_REQUEST['comment']);
		$result=$db->insert_rows($table_name,$field_name,$field_values,$values_keys);
		if($result)
		{
			$manageremailid=array('name'=>$_REQUEST['name'],'email'=>$_REQUEST['email'],'mobile'=>$_REQUEST['mobile_num']);
			$stu=student_registered_mail($manageremailid);
				$res=array('success'=>true,'msg'=>'Thank You Quickly Contact to you .');
				echo json_encode($res);
		}
		else
		{
				$res=array('success'=>false,'msg'=>'Please Try Again Later');
				echo json_encode($res);
				
		}
	}
	else{
				$res=array('success'=>false,'msg'=>'Please Try Again Later');
				echo json_encode($res);
	}
}
?>