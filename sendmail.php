<?php 
ob_start();

ini_set('display_errors','0');
include_once'includes/connect.php';
include_once'includes/session.php';
date_default_timezone_set('Asia/Kolkata');
?>

<?php
$query=mysqli_query($mysqli, " select * from tbl_inspection_list as i,tbl_schedule as s where i.id=s.inspection_list_id AND i.id=".$_POST['scheduleId']."");

$row=mysqli_fetch_array($query);
/*echo"<pre>";
print_r($row);
echo"</pre>";*/
 




$Email=$row['email'];
 
require("class.phpmailer.php");
				$mailer = new PHPMailer();
				$mailer->MailerDebug = false;
				$mailer->IsSMTP();
				$mailer->Host = 'ssl://smtp.gmail.com:465';
				$mailer->SMTPAuth = TRUE;
				$mailer->Username = "computerization.digitization12@gmail.com";  // Change this to your gmail adress
				$mailer->Password = 'computerization@123';  // Change this to your gmail password
				$mailer->From = "computerization.digitization12@gmail.com";  // This HAVE TO be your gmail adress
				$mailer->FromName = 'Compliance Status of GPI'; // This is the from name in the email, you can put anything you like here
				$mailer->Body  = '<html><body>';
				$mailer->Body .= '
				<div style="width:600px; height:430px; margin:0 auto;   border-radius:12px; padding:6px; background: rgb(247, 247, 247);
border: 1px solid rgba(147, 184, 189,0.8);
-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109, 0.7), 0px 0px 4px 3px rgba(208, 223, 226, 0.4) inset;
-moz-box-shadow: 0pt 2px 3px rgba(105, 108, 109, 0.7), 0px 0px 4px 3px rgba(208, 223, 226, 0.4) inset;
box-shadow: 0pt 2px 3px rgba(105, 108, 109, 0.7), 0px 0px 4px 5px rgba(208, 223, 226, 0.4) inset;">
<table width="100%">
  <tr>
    <td colspan="2"  style="text-align:center;"><img src="http://125.19.52.218/inspectionPortal/images/logo.png" /></td>
  </tr>
    <tr>
    <td colspan="2" style="border:1px solid #c7c7c7; padding:8px; line-height:25px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"><p><span style="font-size: 16px;
	font-weight: bold; text-transform:uppercase;">Subject: Inspection of GPIs Confidential</span><br />
        <strong>Dear Sir/Madam, <br />
  Please see the inspection details using following  particulars on your Inspection mobile App    </strong></p>
    <p  style="font-size: 14px;
	font-weight: bold;">Please use the following details to log-in the inspection App :</p>  </td>
  </tr>
  <tr>
    <td width="40%" style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;" align="right"><strong>Username</strong> </td>
    <td width="60%" style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">'.$row['teams'].'</td>
  </tr>
  <tr>
    <td style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;" align="right"><strong>Password</strong> </td>
    <td style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">'.$row['name_of_units_data'].'</td>
  </tr>
  <tr>
    <td style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;"  align="right"><strong>Date of Inspection�</strong> </td>
    <td style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">'.$row['Date_Of_Inspection'].'</td>
  </tr>
  <tr>
    <td style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">&nbsp;</td>
    <td style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="border:1px solid #c7c7c7; padding:8px; font-family:Arial, Helvetica, sans-serif; font-size:12px;" colspan="2"><p><strong>Regards<br />
  Central Pollution Control Board,  Delhi</strong><br />
</p></td>
    
  </tr>
</table>


</div>.';
				$mailer->Body.= '</body></html>';  
				$mailer->Subject = 'Compliance Status of GPI Login Details';
				$mailer->AddAddress("$Email");
				$mailer-> IsHTML(true); 
				if($mailer->Send())
				{
    $update=mysqli_query($mysqli, " update tbl_inspection_list set send_mail_status=1 where id=".$row['id']."");
	$_SESSION['message']="Message send successfull.";
	header('location:view_random_number.php');
				}
				
				?>
 


 