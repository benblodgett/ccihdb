<div class="ccih-header" style="background-color:#f2f2f2; border-bottom: 3px solid #d9d9d9;">    <!--#1d4e8b -->
                    <div class="container-lg wide-xl">
                        <div class="ccih-header-wrap">
                            <div class="ccih-header-brand">
                                <a href="#" class="logo-link">
                                    <img class="logo-img" src="../images/_30x30_logo-sm.png" srcset="./images/_30x30_logo-sm.png 3x" alt="logo">
                                </a>
                            </div>
                            <!-- .ccih-header-brand -->

                            <!-- .ccih-header-menu -->
                            <div class="ccih-header-tools">
                                <ul class="ccih-quick-nav">

                                    <!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-lg-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <h5 class="ml-2 text-blue">Hi, <?=$_COOKIE["uname"]?></h5>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">

                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                <?if($_COOKIE["previ"]=="OA"){?>
                                                    <li><a href="cen_user_det.php"><em class="icon ni ni-user"></em><span>Add new user</span></a></li>
                                                    <li><a href="report/q1.php"><em class="icon ni ni-user"></em><span>View Report</span></a></li>
                                                    <?}?>
                                                    <li><a href="chpwd.php"><em class="icon ni ni-lock"></em><span>Change password</span></a></li>
                                                    <li><a href="logout.php"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>                                           
                                        </div>
                                    </li>
                                    <!-- .dropdown -->
                                    
                                </ul>
                                <!-- .ccih-quick-nav -->
                            </div>
                            <!-- .ccih-header-tools -->
                        </div>
                        <!-- .ccih-header-wrap -->
                    </div>
                    <!-- .container-fliud -->
                </div>