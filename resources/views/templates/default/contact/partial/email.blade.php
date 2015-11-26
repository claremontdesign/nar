{!! view(cd_nar_view_name('email.header')) !!}

<?php
$msg = '==== a Message from Contact Us page. <a href="' . cd_route('contact-us') . '">Contact Us</a>===';
$msg .= '<br />';
$msg .= '<br />';
$msg .= 'Date: ' . cd_dateDisplay(date('Y-m-d H:i:s'), true);
$msg .= '<br />';
$msg .= 'Name: ' . $name;
$msg .= '<br />';
$msg .= 'Email Address: ' . $email;
$msg .= '<br />';
if(!empty($subject))
{
	$msg .= 'Telephone: ' . $telephone;
	$msg .= '<br />';
}
if(!empty($ordernumber))
{
	$msg .= 'Order Number: ' . $ordernumber;
	$msg .= '<br />';
}
$msg .= 'Subject: ' . $subject;
$msg .= '<br />';
$msg .= 'Comment: ';
$msg .= '<br />';
$msg .= $comment;
$msg .= '<br />';
$msg .= '<br />';
$msg .= '=====';
echo $msg;
?>

{!! view(cd_nar_view_name('email.footer')) !!}