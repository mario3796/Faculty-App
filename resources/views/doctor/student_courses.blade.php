
<!DOCTYPE html>
<html lang="en" >

<head>
    <title>Table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/TableInfo.css">
    <link rel="stylesheet" type="text/css" href="/css/MyStyle.css">

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

            <li class="selected"><a href="my_courses">My courses</a></li>
            <li class="selected"><a href="add_post">Add post</a></li>


        </ul>
    </div>
    <div class="col-sm-11" >
        <div class="table" >
            <h1 style="  font: 100 30px/1.6 'Pacifico', Georgia, serif;">Index</h1>
            <a href="#" style="color: #000"><i class="fa fa-plus" style="padding-right:  10px"></i>Create New</a>
            <!-- Responsive table starts here -->
            <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
            <div class="table-responsive-vertical shadow-z-1" style="margin-top: 40px; width: 96%;overflow-x:auto; margin-left: 20px; font-family:Courier New; font-size: 12px">
                <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
                <table id="table" class="table table-hover table-mc-light-blue table-responsive" >
                    <thead>
                    <tr class="line">
                        <th>name</th>
                        <th>grade</th>


                        <th>update grade</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php if (is_array($courses_student)||is_object($courses_student)){
                    //    echo $courses;
                    //    echo gettype($courses);
                    foreach($courses_student as $course_student){
                    //  echo $course;


                    ?>
                    <tr>
                        <td data-title="Date">{{$course_student->user->fname." ".$course_student->user->lname}}</td>

                        <td data-title="Date">{{$course_student->grade}}</td>

                        <td data-title="Edit">   <a href="/student_courses/edit/{{$course_student->course_id}}/{{$course_student->user_id}}"><i class="fa fa-edit" style="padding-left: 5px"></i>Update grade</a></td>

                    </tr>
                    <?php






                    }               }


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



