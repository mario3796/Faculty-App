
<!DOCTYPE html>
<html lang="en" >

<head>
    <title>Table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/TableInfo.css">
    <link rel="stylesheet" type="text/css" href="css/MyStyle.css">

    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>



</head>

<body>
<div class="navbar">
    <div class="logo"><span>FCIH</span></div>
    <div style="">

        <ul>
            <a href="/profile"><li><i class="fa fa-user" style="padding-right: 5px"></i>{{$_SESSION['name']}}</li></a>
            <a href="/logout"><li>logout</li></a>
        </ul>
    </div>
</div>
<div id="demo" class="row">


    <div class="col-sm-1" id="vertical_tab_nav">
        <ul>
            <li class="selected"><a href="/">home</a></li>
            <li class="selected"><a href="profile">profile</a></li>

            <li class="selected"><a href="view_students">View Students</a></li>
            <li class="selected"><a href="view_doctors">View Doctors</a></li>
            <li class="selected"><a href="view_courses">View Courses</a></li>
        </ul>
    </div>
    <div class="col-sm-11" >
        <div class="table" >
            <h1 style="  font: 100 30px/1.6 'Pacifico', Georgia, serif;">Index</h1>
            <a href="add" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
            <!-- Responsive table starts here -->
            <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
            <div class="table-responsive-vertical shadow-z-1" style="margin-top: 40px; width: 96%;overflow-x:auto; margin-left: 20px; font-family:Courier New; font-size: 12px">
                <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
                <table id="table" class="table table-hover table-mc-light-blue table-responsive" >
                    <thead>
                    <tr class="line">
                        <th>ID</th>
                        <th>full name</th>
                        <th style="width: 80px">email</th>
                        <th>level</th>
                        <th>birth date</th>

                        <th>Edit</th>
                        <th>Details</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (is_array($users)||is_object($users)){
                    foreach($users as $student){?>
                    <tr>
                        <td data-title="ID">{{$student->id}}</td>
                        <td data-title="Date">{{$student->fname." ".$student->lname}}</td>
                        <td data-title="ID" >{{$student->email}}</td>

                        <td data-title="DueBy">{{$student->level}}</td>
                        <td data-title="DueBy">{{$student->birth_date}}</td>

                        <td data-title="Edit">   <a href="edit/{{$student->id}}"><i class="fa fa-edit" style="padding-left: 5px"></i>Edit</a></td>
                        <td  data-title="Details"><a href="details/{{$student->id}}" class=" w3-small "> <i class="fa fa-info-circle" style="padding-left: 0px"></i>Details</a> </td>
                        <td data-title="Delete">   <a href="add/{{$student->id}}" class="cd-popup-trigger w3-small "><i class="fa fa-trash-o" style="padding-left: 0px"></i>Delete</a></td>
                    </tr>
                    <?php
                    }}
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>Are you sure you want to delete this element?</p>
        <ul class="cd-buttons">
            <li><a href="#0">Yes</a></li>
            <li><a class="close_Window" href="#0">No</a></li>
        </ul>
        <a href="#" class="cd-popup-close img-replace"></a>
    </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



<script  src="js/myJs.js"></script>




</body>

</html>



