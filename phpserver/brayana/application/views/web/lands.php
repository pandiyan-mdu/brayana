<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Brayana </title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

     <!-- Bootstrap core CSS     -->
    <link href="css/brayana.css" rel="stylesheet" />



    <!--     Fonts and icons     -->
    <link href="assets/css/awesome-font.css" rel="stylesheet">
    <link href='assets/css/googleapi.css' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue">



            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        BRAYANA
                    </a>
                </div>

                 <ul class="nav">
                     
                    <li class="active">
                        <a href="../land/landView.html">
                            <i class="pe-7s-user"></i>
                            <p>Lands</p>
                        </a>
                    </li>
                    <li >
                        <a href="../chitFund/chitFundView.html">
                            <i class="pe-7s-note2"></i>
                            <p>Chit Funds</p>
                        </a>
                    </li>
                    <li >
                        <a href="../agarWood/agarWoodView.html">
                            <i class="pe-7s-news-paper"></i>
                            <p>Agar Wood</p>
                        </a>
                    </li>
                    <li>
                        <a href="../employee/employeeView.html">
                            <i class="pe-7s-science"></i>
                            <p>Employees</p>
                        </a>
                    </li>
                    <li>
                        <a href="../customer/customerView.html">
                            <i class="pe-7s-map-marker"></i>
                            <p>Customer</p>
                        </a>
                    </li>
                    <li>
                        <a href="../reports/reportsView.html">
                            <i class="pe-7s-bell"></i>
                            <p>Reports</p>
                        </a>
                    </li>
                     <li>
                        <a href="../Notification/notificationView.html">
                            <i class="pe-7s-science"></i>
                            <p>Notification</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                       
                        <ul class="nav navbar-nav navbar-right">

                           <li>
                            <a href="../index.html">
                                <p>Log out</p>
                            </a>
                        </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                   
                                    <li class="active">Lands</li>   
                            </ol>
                            <button type="submit" class="btn btn-primary btn-fill marginBottom10"  onclick="openLandAddPage()">Add</button>
                            <div class="card">
                                <div class="header">
                                    <div class="input-group">
                                        <input type="text" class="form-control" />
                                        <span class="input-group-addon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>S.NO</th>
                                            <th>Site Name</th>
                                            <th>Survey No</th>
                                            <th>Area</th>
                                            <th>City</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Rose Garden</td>
                                                <td>12345</td>
                                                <td>2000SqFt</td>
                                                <td>Chennai</td>
                                                <td> <button type="button" class="btn btn-outline-success" data-toggle="modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                  
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    
                                                  </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                 <td>Temple city</td>
                                                <td>67890</td>
                                                <td>400SqFt</td>
                                                <td>Chennai</td>
                                                <td> <button type="button" class="btn btn-outline-success" data-toggle="modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                  
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    
                                                  </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                 <td>Green House</td>
                                                <td>678345</td>
                                                <td>6000SqFt</td>
                                                <td>Chennai</td>
                                                <td> <button type="button" class="btn btn-outline-success" data-toggle="modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                  
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    
                                                  </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Orange Garden</td>
                                                <td>8656456</td>
                                                <td>8000SqFt</td>
                                                <td>Chennai</td>
                                                <td> <button type="button" class="btn btn-outline-success" data-toggle="modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                  
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    
                                                  </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                 <td>Mahendra City</td>
                                                <td>758476434</td>
                                                <td>2000SqFt</td>
                                                <td>Chennai</td>
                                                <td> <button type="button" class="btn btn-outline-success" data-toggle="modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                  
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    
                                                  </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Blue Garden</td>
                                                <td>64754</td>
                                                <td>2060SqFt</td>
                                                <td>Chennai</td>
                                                <td> <button type="button" class="btn btn-outline-success" data-toggle="modal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                  
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    
                                                  </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                  
                    <p class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script> All Rights reserved
                    </p>
                </div>
            </footer>

        </div>
    </div>


</body>

<script type="text/javascript" src="assets/js/scripts.js"></script>
<!--   Core JS Files   -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

 <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

  <!-- client side validation script -->
 <script src="js/land.js"></script>

</html>