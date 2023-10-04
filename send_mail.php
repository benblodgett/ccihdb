<?
//phpinfo();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('config.php');
require('vendor/autoload.php');
//require('vendor/sendgrid/sendgrid/sendgrid-php.php');

//require('sendgrid-php/sendgrid-php.php');

$email = new \SendGrid\Mail\Mail();
$email->setFrom("30x30@ccih.org", "30x30 Health Systems Initiative");
$email->setSubject("Sending with Twilio SendGrid is Fun with attachment");
//$email->addTo("omprakash2006k@gmail.com");
$email->addTo("test-h0wjgvxzn@srv1.mail-tester.com");

$email->addCc("omprakash2000k@yahoo.co.in");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP- test mail</strong>"
);
/*
$file_encoded = base64_encode(file_get_contents('test.pdf'));
$email->addAttachment(
   $file_encoded,
   "application/pdf",
   "test.pdf",
   "attachment"
);
*/
$filename = basename('test.pdf');
$file_encoded = base64_encode(file_get_contents('test.pdf'));
$attachment = new SendGrid\Mail\Attachment();
$attachment->setType("application/text");
$attachment->setContent($file_encoded);
$attachment->setDisposition("attachment");
$attachment->setFilename($filename);
$email->addAttachment($attachment);

$sendgrid = new \SendGrid(SENDGRID_API_KEY);

try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers()) ."\n";
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>