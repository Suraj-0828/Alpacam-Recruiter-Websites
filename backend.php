<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{

            $to = 'hr@alpacam.com';  
            $subject = 'Contact Us - Form Enquiry';


            $data='<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';

            $data.='<tr><td colspan="2" align="center">Contact Details </td></tr>';/* field name */

            $data.='<tr><td>Email ID: </td><td>'.$_POST['email'].'</td></tr>';

            $data .= '<tr><td>IP Adderss  </td><td>' . $_SERVER['REMOTE_ADDR'] . '</td></tr>';

            $data.='</table>';

            $message=$data;

            $headers = "MIME-Version: 1.0" . "\r\n";

            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'From: Contact Us <info@alpacam.com>' . "\r\n";

            header('Content-Type: application/json');

            if(mail($to,$subject,$message,$headers)){
                
                header('Location: success.php');
               
            }
            else
            {
               
                header('Location: failed.php');
            }
            }

?>