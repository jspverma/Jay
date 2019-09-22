<?php
error_reporting(0);
session_start();
include('inc/db.php');
$id=$_GET['id'];
$qtyPro=$_GET['qty'];
$total=$_GET['total'];
$service=$_GET['service'];
$price=$_GET['price'];
$inspection_charge=$_GET['inspection_charge'];
$inspection_charge=$_GET['inspection_charge'];
$minimum_service_charges=$_GET['minimum_service_charges'];
$Date=$_GET['date'];
$time=$_GET['time'];
$url=$_GET['url'];
$ser=$_GET['ser'];
?>
<!doctype html>

<html>



<head>

    <title>Login or Sign Up</title>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="<?php echo $root_path; ?>assets/css/login_style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
    function numericFilter(txb)
    {
     txb.value = txb.value.replace(/[^\0-9]/ig,'');
    }
    </script>

    <script>
    function userSign()
    {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var contact = document.getElementById('contact').value;
        var  password= document.getElementById('password').value;
        var emailPattern=/\S+@\S+\.\S+/;

        var dataString = 'action=signup&name1='+name+'&email1='+email+'&contact1='+contact+'&password1='+password;
    //  alert(dataString);
    if(name =='' || email=='' || contact=='' || password =='')
    {
        $('#signupalert').html('Please Fill all Mandatory Field *');
    }
    else if(!emailPattern.test(email))
    {
        $('#signupalert').html('Please Enter Valid Email Id ');
    }
    else
    {
        $.ajax({
            type: "POST",
            url: "ajaxfile.php?",
            data: dataString,
            cache: false,
            success: function(html)
            {
                if(html == 'You Have Successfully Registered With Homebuilt')
                {
                $('#signupalert').html(html);
                $('#signupform').hide();
                }
                else
                {
                $('#signupalert').html(html);
                
               }
            }
        });

    }
        return false;
    }

    function userLogin()
    {
        var lgmob = document.getElementById('lgmob').value;
        var lgpassword = document.getElementById('lgpassword').value;
        var dataString = 'action=userlogin&lgmob1='+lgmob+'&lgpassword1='+lgpassword;
        if(lgmob == '' || lgpassword == '' )
        {
            $('#login-alert').html('Please Enter Mobile Number & password *');
        }
        else
        {
            $.ajax({
                type: "POST",
                url: "ajaxfile.php?",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    if(html == 'User Login Now')
                    {
                    window.location='http://www.hombuilt.com/';
                    }
                    else
                    {
                        $('#login-alert').html(html);
                    }
                }
            });
        }
        return false;
    }
    </script>

</head>



<body>
<div id="fb-root"></div>
<!--<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=489187954775331";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
-->
<script>
    // Facebbok OAuth init
    window.fbAsyncInit = function () {
        FB.init({
            appId: '489187954775331', // Replace the App ID with yours
            status: true, // check login status
            cookie: true, // enable cookies to allow the server to access the session
            xfbml: true  // parse XFBML
        });
    };

    // Load the SDK asynchronously
    (function (d) {
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement('script');
        js.id = id;
        js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));
</script>
    <div class="container">

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

            <div class="panel panel-info">

                <div class="panel-heading">

                    <div class="panel-title">Sign In</div>

                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>

                </div>



                <div style="padding-top:30px" class="panel-body">



                    <div id="login-alert" class="alert alert-danger col-sm-12" style="text-align:center;"></div>



                    <form method="post"  class="form-horizontal">



                        <div style="margin-bottom: 25px" class="input-group">

                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                            <input id="lgmob" type="text" class="form-control" name="lgmob" placeholder="phone number *" onkeyup = "numericFilter(this);" maxlength="10" required>

                        </div>



                        <div style="margin-bottom: 25px" class="input-group">

                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                            <input id="lgpassword" type="password" class="form-control" name="lgpassword" placeholder="password *" required>

                        </div>





                        <div class="input-group">

                            <div class="checkbox">

                                <label>

                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me

                                </label>

                            </div>

                        </div>


                        <div style="margin-top:10px" class="form-group">

                            <!-- Button -->



                            <div class="col-sm-8 col-sm-offset-2 controls">

                                

                                <input type="submit" name="login" class="loginBtn loginBtn--manual" value="Login"><br>
                                <div class="fb-login-button" data-width="80px" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                

                            </div>

                            <?php
          if(isset($_POST['login'])) {

    $lgpassword = $_POST['lgpassword'];
    $lgmob = $_POST['lgmob'];
    $result = $mysqli->query("select * from signup where password='$lgpassword' and contact='$lgmob'");
    $fetch = mysqli_fetch_array($result);
    $count_rows = $result->num_rows;

    if ($count_rows > 0) {
        $_SESSION['user_id'] = $fetch['id'];
        $_SESSION['contact'] = $fetch['contact'];
        $_SESSION['name'] = $fetch['name'];
        $_SESSION['email'] = $fetch['email'];

        $c = $_SESSION['name'];

        if ($url == "modular-kitchen.php")
         {
                    if ($url != "") {
            //echo "<script>alert('" . $_SESSION['name'] . "')</script>";
            

        http://localhost/hombuilt/checkout.php?id=&total=&url=modular-kitchen.php&qty=&service=U%20shape,L%20shape,&date=2017-09-29&time=3:00-5:00%20pm&st=&price=1000



            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service . "&date=" . $Date . "&time=" . $time ."&ser=" . $ser ."&url=" . $url ."&price=" . $price. "'</script>";
            //header('Location:checkout.php');

           // &url=architects.php
        }



            $bdate=date("Y-m-d");
            date_default_timezone_set("asia/kolkata");
            $btime=date("h:i:sa");
            $bookingID = time();
            $email = $_SESSION['email'];
            

        } 
        if($url == "architects.php") {

            if ($url != "") {
            //echo "<script>alert('" . $_SESSION['name'] . "')</script>";
            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service . "&date=" . $Date . "&time=" . $time ."&ser=" . $ser ."&url=" . $url.'&price='.$price. "'</script>";
            //header('Location:checkout.php');

           // &url=architects.
        } else {
            echo "<script>window.location.href='index.php';</script>";
        }


            /*$Date = $_POST['date'];
            $time = $_POST['time'];*/
            $bdate=date("Y-m-d");
            date_default_timezone_set("asia/kolkata");
            $btime=date("h:i:sa");
            $bookingID = time();
            $email = $_SESSION['email'];
            
        }

            if($url == "interior-designers.php") {

            if ($url != "")

             {

                            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service . "&date=" . $Date . "&time=" . $time ."&service=" . $service ."&url=" . $url.'&price='.$price. "'</script>";
            


           } 
           else 
           {
                    echo "<script>window.location.href='index.php';</script>";
        }
        }




if($url == "solar-planting.php") {

            if ($url != "")

             {

                
            //echo "<script>alert('" . $_SESSION['name'] . "')</script>";
            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service . "&date=" . $Date . "&time=" . $time ."&service=" . $service ."&url=" . $url.'&price='.$price. "'</script>";
            //header('Location:checkout.php');



           } 
           else 
           {
                    echo "<script>window.location.href='index.php';</script>";
            }
        
}

if($url == "home-improvement.php") {

            if ($url != "")

             {

                
            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service . "&date=" . $Date . "&time=" . $time ."&service=" . $service ."&url=" . $url.'&price='.$price. "'</script>";
          


           } 
           else 
           {
                    echo "<script>window.location.href='index.php';</script>";
            }
        
}

if($url == "flooring.php") {

            if ($url != "")

             {

                
            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service . "&date=" . $Date. "&inspection_charge=" . $inspection_charge . "&time=" . $time ."&service=" . $service ."&url=" . $url.'&price='.$price. "'</script>";
          


           } 
           else 
           {
                    echo "<script>window.location.href='index.php';</script>";
            }
        
}
if($url == "paint.php") {

            if ($url != "")

             {

                
            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service . "&date=" . $Date. "&inspection_charge=" . $inspection_charge . "&time=" . $time ."&service=" . $service ."&url=" . $url.'&price='.$price. "'</script>";
          


           } 
           else 
           {
                    echo "<script>window.location.href='index.php';</script>";
            }
        
}




        
        else if ($url != "") {
            //echo "<script>alert('" . $_SESSION['name'] . "')</script>";
            echo "<script>window.location.href='checkout.php?id=" . $id . "&total=" . $total . "&qty=" . $qtyPro . "&service=" . $service."&inspection_charge=". $inspection_charge. "&date=" . $Date . "&time=" . $time."'</script>";
            //header('Location:checkout.php');
        } else {
            echo "<script>window.location.href='index.php';</script>";
        }
        //$row = $result->fetch_array();
    } else {
        $msg = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error&nbsp;!&nbsp;&nbsp;</strong>Wrong Email or Password.</div>';
    }
    $mysqli->close();

}

?>

                        <!--        <div class="col-sm-6 col-sm-offset-3 controls" style="margin-top: 17px;">

                                <p style="text-align: center; font-size: 16px; margin-left: 6px;">OR</p>

                            </div>

                            

                        <div class="col-sm-8 col-sm-offset-2 controls">



                                <button class="loginBtn1 loginBtn loginBtn--facebook">Login with Facebook</button>

                                

                            </div>

                            <div class="col-sm-8 col-sm-offset-2 controls">

                                

                                <button class="loginBtn1 loginBtn loginBtn--google">Login with Google</button>

                                

                            </div>  -->

                        </div>



                        <div class="form-group">

                            <div class="col-md-12 control" style="margin-top: 20px;">

                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">

                                    Don't have an account!

                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()" id="here">Sign Up Here</a>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

            <div class="panel panel-info">

                <div class="panel-heading">

                    <div class="panel-title">Sign Up</div>

                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>

                </div>

                <div class="panel-body">
                    <div id="signupalert" class="alert alert-danger" style="text-align: center;">       
                        </div>

                    <form method="post" class="form-horizontal">

                        <div class="form-group">

                            <label for="firstname" class="col-md-3 control-label">Name: </label>

                            <div class="col-md-9">

                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name *" required>

                            </div>

                        </div>


                            <div class="form-group">

                            <label for="email" class="col-md-3 control-label">Email: </label>

                            <div class="col-md-9">

                                <input type="text" class="form-control" name="email" id="email" placeholder="Email Address *" required>

                            </div>

                        </div>



                        <div class="form-group">

                            <label for="phone number" class="col-md-3 control-label">Contact : </label>

                            <div class="col-md-9">

                                <input type="text" class="form-control" name="contact" id="contact" placeholder="phone number *" onkeyup ="numericFilter(this)" maxlength="10" required>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="password" class="col-md-3 control-label">Password: </label>

                            <div class="col-md-9">

                                <input type="password" class="form-control" name="password" id="password" placeholder="password *" required>

                            </div>

                        </div>

                        <div class="col-md-offset-3 col-md-9">

                            <input id="btn-signup" name="submit" type="submit" class="btn btn-primary"  value="Sign Up">

                        </div>



                    </form>

                </div>

            </div>

        </div>

    </div>
<?php
 if(isset($_POST['submit'])) {

     $name = $_POST['name'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $password = $_POST['password'];
     $date = date("dd:mm:yy");
     $status = "0";

     $sql = "INSERT INTO `signup` (`id`, `name`, `email`, `contact`, `password`, `status`, `verification`, `date`) VALUES (NULL, '$name', '$email', '$contact', '$password', '$status', 'true', '$date')";

     if ($mysqli->query($sql) === TRUE) {
         echo "<script>alert('Successfully!');</script>";
     } else {
         echo mysqli_error();
         echo "<script>alert('Something Went Wrong.Try Again..!!!!');</script>";
     }

 }
?>

</body>



</html>

