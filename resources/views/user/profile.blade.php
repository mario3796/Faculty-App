<!DOCTYPE html>
<html>
<head>
    <title>profile</title>
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
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
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
    <link rel="stylesheet" type="text/css" href="/css/main1.css">

    <link rel="stylesheet" type="text/css" href="/css/MyStyle.css">
    <link rel="stylesheet" type="text/css" href="/css/create.css">

    <!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
<div class="navbar">
    <div class="logo"><span>FCIH</span></div>
    <div style="">

        <ul>
            <a href="/home"><li><i class="fa fa-user" style="padding-right: 5px"></i>{{$_SESSION['name']}}</li></a>
            <a href="logout"><li>logout</li></a>
        </ul>
    </div>
</div>
<?php
if($_SESSION['type']==0) {
?>
@include('admin.privilage');

<?php
}
else if ($_SESSION['type']==1)
{

?>
@include('student.privilage');

<?php
}
else
{
?>
@include('doctor.privilage');

<?php
}
?>
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


    <form method="post" action="/profile/{{$user->id}}">
    {{csrf_field()}}        <!--  General -->
        <div class="form-group">
            <h2 class="heading">edit student</h2>


            <div class="grid">
                <div class="col-1-2 col-1-2-sm ">
                    <div class="controls">
                        <input type="text" value="{{$user->fname}}" name="fname" class="floatLabel" id="first-name" placeholder="enter first name">
                        <label for="first-name">First Name</label>
                    </div>
                </div>
                <div class="col-1-2 col-1-2-sm ">

                    <div class="controls">
                        <input type="text" value="{{$user->lname}}" name="lname" class="floatLabel" id="last-name" placeholder="enter last name">
                        <label for="last-name">Last Name</label>

                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-1-2 col-1-2-sm ">
                    <div class="controls">

                        <input type="email" name="email" id="email" class="floatLabel" value="{{$user->email}}" placeholder="enter Email">
                        <label for="email">email</label>


                    </div>
                </div>
                <div class="col-1-2 col-1-2-sm ">

                    <div class="controls">
                        <input type="text" name="password" id="pass" class="floatLabel" value="{{$user->password}}" placeholder="enter password">
                        <label for="pass">Password</label>

                    </div>
                </div>
            </div>
            @if($user->user_type==1)

            <div class="grid" style="width: 100%">
                <div class="controls">
                    <input type="text" id="Status" class="floatLabel" value="{{$user->level}}" name="level" style="height: 55px;" readonly>


                    <label for="Status">-Level-</label>
                </div>
            </div>
            @endif
            <div class="grid" style="width: 100%">
                <div class="controls">
                    <input type="date" name="birthdate" id="birth" value="{{$user->birth_date}}" class="floatLabel" >
                    <label for="birth" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;enter birth date</label>

                </div>
            </div>

            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button  type="submit" class="login100-form-btn">
                        Edit
                    </button>
                </div>


            </div>
        </div> <!-- /.form-group -->
    </form>
</div>

<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/daterangepicker/moment.min.js"></script>
<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script>
<script src="/js/myJs.js"></script>




</body>
</html>




