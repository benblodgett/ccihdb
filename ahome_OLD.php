<?
require("config.php");
require("valid.inc.php");
$ctxt=$_GET['ctxt'];

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
.btn-radus{
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
        </style>
</head>

<body class="ccih-body bg-white npc-default has-aside ">
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
                        <!-- .ccih-aside -->
                        <div class="ccih-content-body">
                            
                        <table class="table table-tranx is-compact">
                                                    <thead>
                                                        <tr class="tb-tnx-head">
                                                            <th class="tb-tnx-id"><span class="">Sno</span></th>
                                                            <th class="tb-tnx-info">
                                                                <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                    <span>Center Name</span>
                                                                </span>
                                                                </th>
                                                            <th class="tb-tnx-amount"> </th>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">1</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc">
                                                                    <span class="title">American Leprosy Missions</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c1.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">2</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Assistive Technology Catalyst Project with IDEAS</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c2.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">3</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">World Renew</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c3.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">4</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Christian Academy of African Physicians</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c4.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">5</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">The Christian Health Association of Kenya (CHAK)</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c5.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">6</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Christian Health Association of Malawi (CHAM)</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c6.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">7</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Christian Medical Association India (CMAI)</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c7.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">8</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Cure International</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c8.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">9</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Dalton Foundation</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c9.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">10</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Digital African Health Library Service</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c10.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">11</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Health Services Corps</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c11.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">12</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Hezekiah Health Foundation</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c12.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">13</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">IMA World Health</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c13.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">14</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">LifeNet International</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c14.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">15</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Rural Health Services (RHS) of Sudan</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c15.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">16</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Samaritan Purse</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c16.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">17</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">St. John’s Medical College, Bangalore</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c17.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">18</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Église Méthodiste du Togo</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c18.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">19</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Uganda Protestant Medical Bureau (UPMB)</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c19.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        <tr class="tb-tnx-item">
                                                            <td class="tb-tnx-id">20</td>
                                                            <td class="tb-tnx-info">
                                                                <div class="tb-tnx-desc1">
                                                                    <span class="title">Zimbabwe Association of Church-Related Hospitals</span>
                                                                </div>                                                               
                                                            </td>
                                                            <td class="tb-tnx-amount">
                                                            <a href="c20.php"><span>View</span></a>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>


                        </div>
                    </div>
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
        //For Word Count
            $("#q1,#q2,#q3,#q4,#q5").on('keyup', function() {
                var words = this.value.match(/\S+/g).length;
                if (words > 500) {
                    var trimmed = $(this).val().split(/\s+/, 500).join(" ");
                    $(this).val(trimmed + " ");
                }
                else {
                    var s=500-words;
                    //alert(this.id);
                    var tarID='#'+this.id+'_left';
                    $(tarID).text("You have "+ s +" words left.");
                }
            });
         
  </script>
</body>

</html>