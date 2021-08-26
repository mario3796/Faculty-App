<!DOCTYPE html>
<html>
<head>
    <title>add course</title>
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
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
    <link rel="stylesheet" type="text/css" href="css/main1.css">

    <link rel="stylesheet" type="text/css" href="css/MyStyle.css">
    <link rel="stylesheet" type="text/css" href="css/create.css">

    <!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
<div class="navbar">
    <div class="logo"><span>FCIH</span></div>
    <div style="">

        <ul>
            <a href="/profile"><li><i class="fa fa-user" style="padding-right: 5px"></i>{{$_SESSION['name']}}</li></a>
            <a href="/logout"><li>logout</li></a>
        </ul>
    </div>
</div>
<div class="col-sm-3" id="vertical_tab_nav">
    <ul>
        <li class="selected"><a href="/">home</a></li>
        <li class="selected"><a href="profile">profile</a></li>

        <li class="selected"><a href="view_students">View Students</a></li>
        <li class="selected"><a href="view_doctors">View Doctors</a></li>
        <li class="selected"><a href="view_courses">View Courses</a></li>

    </ul>
</div>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class=" col-sm-9">


    <form method="post" action="add_course">
    {{csrf_field()}}        <!--  General -->
        <div class="form-group">
            <h2 class="heading">add student</h2>


            <div class="grid" style="width:100% ">
                    <div class="controls">
                        <div class="form-group{{$errors->has('fname') ? 'has error' : ''}}">
                            <input type="text" name="name" class="floatLabel" id="name" placeholder="enter first name">
                            <label for="name">Course Name</label>
                        </div>
                    </div>


            </div>
            <div class="grid" style="width: 100%">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select id="Status" class="floatLabel" name="level" style="height: 55px;">
                        <option value="blank"></option>
                        <option value="1">level 1</option>
                        <option value="2" selected>level 2</option>
                        <option value="3">level 3</option>
                        <option value="4">level 4</option>

                    </select>
                    <label for="Status">-Level-</label>
                </div>
            </div>
            <div class="grid" style="width: 100%">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select id="doctor" class="floatLabel" name="doctor_id" style="height: 55px;">
                        <option value="blank"></option>

                    <?php if (is_array($users)||is_object($users)){
                            foreach($users as $doctor){?>

                        <option value="{{$doctor->id}}">{{$doctor->fname." ".$doctor->lname}}</option>

<?php
}
}
?>
                    </select>
                    <label for="doctor">-Doctor-</label>
                </div>
            </div>

            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button  type="submit" class="login100-form-btn">
                        Add Course
                    </button>
                </div>

                <a href="index.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                    Back to list
                    <i class="fa fa-long-arrow-right m-l-5"></i>
                </a>
            </div>
        </div> <!-- /.form-group -->
    </form>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script>
<script src="js/myJs.js"></script>



</body>
</html>