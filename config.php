<?
//Database credentials. Assuming you are running MySQL server
define('SENDGRID_API_KEY','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');
//define('WEB_DOMAIN', 'http://143.198.183.206'); 
define('WEB_DOMAIN', 'https://www.30x30.ccih.org'); 
define('ADMIN_EMAIL', '30x30@ccih.org'); 
define('CC_EMAIL', '30x30@ccih.org'); 
//define('CC_EMAIL', 'omprakash2000k@yahoo.co.in'); 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'ccih');
define('DB_NAME', 'ccih_hsi');

$CCIHCon = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($CCIHCon === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>