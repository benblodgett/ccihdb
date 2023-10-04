<?
require("config.php");
require("valid.inc.php");

$labdata="select cid Sno, center_id CID, center_name Name, center_address Address, center_contact Contact, center_email Email from center_details";
    //echo $labdata;
    $productResult=mysqli_query($CCIHCon,$labdata)or die("Unable connect to the table");
    
    $filename = "center_details.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

    ?>