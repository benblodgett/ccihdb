<?
require("config.php");
require("valid.inc.php");
$eid=hex2bin($_GET['d']);

//
session_start();
if($_SESSION["DBload"]==0)
 {
//Start inserting data from various table information
$dbhandle = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$dbhandle1 = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Clear table rows
$delquery = $dbhandle->query("DELETE from tempreptbl") or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

//Add data to Temp table
$sqlstr="
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '23',rp,q2_1,'Children/adolescents reached','ECD' FROM c23 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '23',rp,q2_2,'Children/adolescents reached','ECD' FROM c23 where rp not in ('Target 2030');

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '6',rp,q6_1,'Church groups involvement in health activities','Basic/General health services' FROM c6 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q5_2,'Church groups involvement in health activities','Basic/General health services' FROM c25 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '30',rp,q3_1,'Church groups involvement in health activities','Basic/General health services' FROM c30 where rp not in ('Target 2030'); 

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '12',rp,q2_1,'Community groups established','Community Health' FROM c12 where rp not in ('Target 2030'); 

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '3',rp,q1_3,'Community groups trained','Community Health' FROM c3 where rp not in ('Target 2030'); 

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '29',rp,q7_1,'Community health activities','Basic/General health services' FROM c29 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q5_1,'Church groups involvement in health activities','Basic/General health services' FROM c25 where rp not in ('Target 2030'); 

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '1',rp,q1_3,'Inpatients services provided','Leprosy' FROM c1 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q3_2,'Inpatients services provided','Health Services' FROM c22 where rp not in ('Target 2030'); 

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '2',rp,q1_2,'Institutions supported','Medicine, Supplies and Equipment' FROM c2 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '2',rp,q3_1,'Institutions supported','Funding' FROM c2 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '5',rp,q1_2,'Institutions supported','QMS' FROM c5 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '5',rp,q1_3,'Institutions supported','QMS' FROM c5 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '5',rp,q2_2,'Institutions supported','QMS' FROM c5 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '7',rp,q1_1,'Institutions supported','QMS' FROM c7 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '9',rp,q2_1,'Institutions supported','Medicine, Supplies and Equipment' FROM c9 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '9',rp,q2_2,'Institutions supported','Medicine, Supplies and Equipment' FROM c9 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '9',rp,q2_3,'Institutions supported','Medicine, Supplies and Equipment' FROM c9 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '12',rp,q4_1,'Institutions supported','Medicine, Supplies and Equipment' FROM c12 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '13',rp,q1_1,'Institutions supported','Leadership and Governance' FROM c13 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '14',rp,q4_1,'Institutions supported','Medicine, Supplies and Equipment' FROM c14 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '17',rp,q1_1,'Institutions supported','Leadership and Governance' FROM c17 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '18',rp,q3_1,'Institutions supported','Medicine, Supplies and Equipment' FROM c18 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '19',rp,q1_1,'Institutions supported','Disease Management' FROM c19 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '19',rp,q2_1,'Institutions supported','Leadership and Governance' FROM c19 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q3_1,'Institutions supported','WASH' FROM c20 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q1_1,'Institutions supported','Data Management' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q1_2,'Institutions supported','Data Management' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q1_3,'Institutions supported','Data Management' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q1_4,'Institutions supported','Data Management' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q2_3,'Institutions supported','Human resources management' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q3_1,'Institutions supported','Leadership and Governance' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q3_2,'Institutions supported','Leadership and Governance' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '24',rp,q3_1,'Institutions supported','Procurement' FROM c24 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q3_2,'Institutions supported','Leadership and Governance' FROM c25 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q3_5,'Institutions supported','Leadership and Governance' FROM c25 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '26',rp,q1_1,'Institutions supported','Medicines, Medical Supplies and Equipment' FROM c26 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '29',rp,q1_1,'Institutions supported','General Supplies' FROM c29 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '29',rp,q1_2,'Institutions supported','General Supplies' FROM c29 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '31',rp,q1_1,'Institutions supported','Technical Support' FROM c31 where rp not in ('Target 2030'); 

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '1',rp,q1_2,'Outpatients services provided','Leprosy' FROM c1 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q4_3,'Outpatients services provided','Health Services' FROM c22 where rp not in ('Target 2030'); 

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '5',rp,q3_1,'Partnerships','Development agencies' FROM c5 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '7',rp,q2_1,'Partnerships','Development agencies' FROM c7 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '3',rp,q1_1,'Partnerships','NGOs' FROM c3 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '1',rp,q3_1,'Partnerships','Government' FROM c1 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q3_4,'Partnerships','Government' FROM c22 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '24',rp,q7_1,'Partnerships','Government' FROM c24 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '24',rp,q7_2,'Partnerships','' FROM c24 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q3_3,'Partnerships','Government' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '29',rp,q5_2,'Partnerships','Government' FROM c29 where rp not in ('Target 2030');
 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '1',rp,q1_1,'People reached through health programs','Leprosy' FROM c1 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '8',rp,q3_1,'People reached through health programs','Disabilities' FROM c8 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '12',rp,q1_1,'People reached through health programs','Insurance' FROM c12 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '15',rp,q2_1,'People reached through health programs','Maternal, Newborn and Child Health' FROM c15 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '18',rp,q1_2,'People reached through health programs','Health Promotion' FROM c18 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '3',rp,q3_1,'People reached through health programs','Health Services' FROM c3 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q1_2,'People reached through health programs','Diabetes' FROM c20 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q2_2,'People reached through health programs','Cervical cancer screening' FROM c20 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q2_4,'People reached through health programs','Cervical cancer treatment' FROM c20 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q3_1,'People reached through health programs','Health Services' FROM c22 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q4_1,'People reached through health programs','Health Services' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q4_4,'People reached through health programs','Maternal, Newborn and Child Health' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q4_5,'People reached through health programs','Maternal, Newborn and Child Health' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '27',rp,q1_3,'People reached through health programs','Advocacy' FROM c27 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '27',rp,q1_5,'People reached through health programs','Advocacy' FROM c27 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '31',rp,q2_1,'People reached through health programs','Surgery' FROM c31 where rp not in ('Target 2030');


INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '1',rp,q5_1,'Personnel trained','Leadership' FROM c1 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '4',rp,q1_3,'Personnel trained','Clinical Practice' FROM c4 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '4',rp,q4_1,'Personnel trained','Clinical Practice' FROM c4 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '5',rp,q2_1,'Personnel trained','QMS' FROM c5 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '6',rp,q5_2,'Personnel trained','Leadership and Governance' FROM c6 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '7',rp,q3_2,'Personnel trained','Document Management' FROM c7 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '7',rp,q4_2,'Personnel trained','Leadership and Governance' FROM c7 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '8',rp,q1_2,'Personnel trained','Clinical Practice' FROM c8 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '8',rp,q2_2,'Personnel trained','Equipment Management' FROM c8 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '11',rp,q2_1,'Personnel trained','Clinical Practice' FROM c11 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '11',rp,q3_1,'Personnel trained','Clinical Practice' FROM c11 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '12',rp,q3_1,'Personnel trained','Maternal, Newborn and Child Health' FROM c12 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '13',rp,q1_2,'Personnel trained','Organizational Development' FROM c13 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '14',rp,q1_2,'Personnel trained','Pharmacy Management/Practice' FROM c14 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '14',rp,q2_2,'Personnel trained','Maternal, Newborn and Child health' FROM c14 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '14',rp,q3_2,'Personnel trained','Financial management' FROM c14 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '15',rp,q1_1,'Personnel trained','Community Health' FROM c15 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '17',rp,q1_2,'Personnel trained','Leadership and Governance' FROM c17 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '18',rp,q1_3,'Personnel trained','Health Promotion' FROM c18 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '18',rp,q2_1,'Personnel trained','Clinical Practice' FROM c18 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '18',rp,q2_2,'Personnel trained','Disease surveillance' FROM c18 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '3',rp,q1_2,'Personnel trained','Health Training' FROM c3 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '3',rp,q1_4,'Personnel trained','Maternal and Child Health' FROM c3 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q3_2,'Personnel trained','Infection control' FROM c20 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q4_1,'Personnel trained','Leadership and Governance' FROM c20 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q5_1,'Personnel trained','Resource Mobilization' FROM c20 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '20',rp,q6_1,'Personnel trained','Data management' FROM c20 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q2_2,'Personnel trained','Basic/General health services' FROM c22 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '23',rp,q1_2,'Personnel trained','WASH' FROM c23 where rp not in ('Target 2030'); 
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '24',rp,q4_2,'Personnel trained','Pharmacy Management/Practice' FROM c24 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '24',rp,q6_3,'Personnel trained','Hospital Management' FROM c24 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q2_2,'Personnel trained','Basic/General health services' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q5_4,'Personnel trained','Basic/General health services' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '26',rp,q2_1,'Personnel trained','Maternal, Newborn  and Child Health' FROM c26 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '27',rp,q1_1,'Personnel trained','Advocacy' FROM c27 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '29',rp,q2_1,'Personnel trained','Social services' FROM c29 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '30',rp,q1_2,'Personnel trained','Data Management' FROM c30 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '30',rp,q2_2,'Personnel trained','Maternal, Newborn  and Child Health' FROM c30 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '31',rp,q4_1,'Personnel trained','Health Training' FROM c31 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '31',rp,q4_2,'Personnel trained','Health Training' FROM c31 where rp not in ('Target 2030');

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q3_5,'Resource mobilisation','Grant Application' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q3_6,'Resource mobilisation','Grant Application' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '31',rp,q3_1,'Resource mobilisation','Infrastructure' FROM c31 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '32',rp,q2_2,'Resource mobilisation','Technical Support' FROM c32 where rp not in ('Target 2030');

INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '4',rp,q1_1,'Training programs','Clinical Practice' FROM c4 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '6',rp,q5_1,'Training programs','Leadership and Governance' FROM c6 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '7',rp,q3_1,'Training programs','Document Management' FROM c7 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '7',rp,q4_1,'Training programs','Leadership and Governance' FROM c7 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '8',rp,q1_1,'Training programs','Clinical Practice' FROM c8 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '8',rp,q2_1,'Training programs','Equipment Management' FROM c8 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '9',rp,q1_2,'Training programs','Leadership and Governance' FROM c9 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '9',rp,q1_3,'Training programs','Leadership and Governance' FROM c9 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '11',rp,q4_1,'Training programs','Clinical Practice' FROM c11 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '14',rp,q1_1,'Training programs','Pharmacy Management/Practice' FROM c14 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '14',rp,q2_1,'Training programs','Maternal, Newborn  and Child health' FROM c14 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '14',rp,q3_1,'Training programs','Financial management' FROM c14 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '22',rp,q2_1,'Training programs','Basic/General health services' FROM c22 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q2_1,'Training programs','Basic/General health services' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q3_1,'Training programs','Leadership and Governance' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q4_3,'Training programs','Maternal, Newborn  and Child health' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '25',rp,q5_3,'Training programs','Basic/General health services' FROM c25 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '30',rp,q2_1,'Training programs','Maternal, Newborn  and Child health' FROM c30 where rp not in ('Target 2030');
INSERT INTO tempreptbl (cid, rp,val,bcategory,subcategory) SELECT '24',rp,q4_1,'Training programs','Pharmacy Management/Practice' FROM c24 where rp not in ('Target 2030');
";

if ($dbhandle1->multi_query($sqlstr) === TRUE) {} else {
    echo "Error: " . $sqlstr . "<br>" . $dbhandle1->error;
  }
  
  $dbhandle1->close();
//End inserting data from various table information

$_SESSION["DBload"]=1;
 }


if (isset($_POST['sub'])) {
    $npwd = $_POST['npwd'];
    $rpwd = $_POST['rpwd'];
    $peid = $_POST['peid'];

    if(strcmp($npwd,$rpwd)!=0){

        $error ="! Your New and Re-type Passwords do not match";
        $errval = true;
        //exit();
    }

    if ( $errval != true) {
        $sqlQuery="SELECT * FROM members WHERE  pri_email='$peid'";
        //echo $sqlQuery;
        $result=mysqli_query($CCIHCon,$sqlQuery)or die("Unable connect to the table");
        if( mysqli_num_rows($result) > 0){

            if($rsmember=mysqli_fetch_array($result)){
                $mail=$rsmember['pri_email'];
                $sqlQuery1="update members set pwd=md5('$npwd') WHERE pri_email='$mail' ";
                $result1=mysqli_query($CCIHCon,$sqlQuery1)or die("Unable connect to the table");
                if($result1)
                    $msg="Your password has been changed successfully!";
            }
        }
        else{
            $error="Invalid email ID, Please try once again"."<br/>";
        }

    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <!-- <link rel="shortcut icon" href="./images/favicon.png"> -->
    <!-- Page Title  -->
    <title>30x30 Health Systems Initiative </title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
    input[type=number] {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
    }

    .btn-radus {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    #loading {
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #fff url("loading.gif") no-repeat center center;
        z-index: 9999;
        }
    </style>
</head>
<body class="ccih-body bg-white npc-default has-aside ">
<div id="loading"></div>

    <div class="ccih-app-root">
        <!-- main header-->
        <div class="ccih-main ">
            <!-- wrap -->
            <div class="ccih-wrap ">
            <?include("header.php");  ?>
                <!-- main header -->
                <!-- content  -->
                <div class="ccih-content ">
                    <div class="container wide-xl">
                    <h4 class="ccih-block-title fw-normal mb-0"><em class="icon ni ni-opt-dot-alt"></em> Select menu options</h4>
                        <hr class="preview-hr mb-0 mt-1">
                        
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body">
                                            <div class="card">
                                                <div class="card-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-4">
                                                        <a href="adm_center_det.php" class="bg-danger">
                                                            <div class="card card-bordered bg-lighter">
                                                                <div class="card-inner">
                                                                <em class="icon ni ni-note-add-fill h1"></em>
                                                                    <h5 class="card-title">Center Creation</h5>
                                                                    <p class="card-text text-head ">Create a new center or view/ update existing center details</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        </div><!-- Inner card-preview -->
                                                        <div class="col-lg-4 mb-4">
                                                        <a href="adm_user_det.php" class="bg-danger">
                                                            <div class="card card-bordered bg-lighter">
                                                                <div class="card-inner">
                                                                <!-- <em class="icon ni ni-users h1"></em> -->
                                                                <em class="icon ni ni-account-setting-fill h1"></em>
                                                                    <h5 class="card-title">User Creation</h5>
                                                                    <p class="card-text text-head">Create a new user or view/ update existing user details</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        </div><!-- Inner card-preview -->
                                                        <div class="col-lg-4 mb-4">
                                                        <a href="adm_view.php" class="bg-danger">
                                                            <div class="card card-bordered bg-lighter">
                                                                <div class="card-inner">
                                                                <em class="icon ni ni-article h1"></em>
                                                                    <h5 class="card-title">View Forms</h5>
                                                                    <p class="card-text text-head mb-4">View reporting details by center wise</p>                                                                    
                                                                </div>
                                                            </div>
                                                        </a>
                                                        </div><!-- Inner card-preview -->  
                                                        <div class="col-lg-4 mb-4">
                                                        <a href="dashboard.php" class="bg-danger">
                                                            <div class="card card-bordered bg-lighter">
                                                                <div class="card-inner">
                                                                <em class="icon ni ni-download h1"></em>
                                                                    <h5 class="card-title">Dashboard report & Data</h5>
                                                                    <p class="card-text text-head">View report by centre wise and as well as download data</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        </div><!-- Inner card-preview -->
                                                    
                                                                                                            
                                                    </div>
                                                    
                                                </div>
                                            </div><!-- .card-preview -->
                                            
                        </div>
                    </div>
                    <!-- content  -->
                </div>
                <!-- wrap  -->
            </div>
            <!-- main  -->
        </div>
        <!-- JavaScript -->
        <script src="./assets/js/bundle.js"></script>
        <script src="./assets/js/scripts.js"></script>
<script>
  $(document).ready(function() {
         $('#loading').fadeOut(3500);
      
});

</script>
</body>

</html>