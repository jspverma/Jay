<?php
error_reporting(0);
include('inc/db.php');
if(isset($_POST['enquiry_submit']))
{

$name = mysqli_real_escape_string($conn, trim($_POST['name']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$contact = mysqli_real_escape_string($conn, trim($_POST['contact']));
$msg = mysqli_real_escape_string($conn, trim($_POST['msg']));

$to = 'contacthombuilt@gmail.com';
$subject = 'Enquiry | Contact Page | Hombuilt';
$message = '<center>
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center" bgcolor="#FFFFFF">
<table width="620px" cellpadding="0" cellspacing="0">
<tr>
<td width="400px"  bgcolor="#000000"  style="color:#FFFFFF; text-decoration:none; float:left;font-size:10px;margin: -18px 3px -1px 11px; font-weight:bold; padding:2px; text-decoration:none; padding-left:0px;">For Support <span style="text-decoration:none; color:#FFFFFF;">enquiry@hombuilt.com</span></td> 
<td width="220px" bgcolor="#000000"></td>
</tr>

<tr style="background-color:#737373;">
<td width="290" align="left" valign="middle"><a href="http://www.hombuilt.com" target="_blank"><img src="http://www.hombuilt.com/images/home_built_logo.png" width="136" border="0" alt="Hombuilt" style="display:block; padding-left:0px;"></a></td>
<td width="290" align="right" style="text-align:right; font-family:Arial, Segoe UI,Helvetica Neue, Helvetica, sans-serif; font-size:18px; line-height:18px; color:#FFFFFF; font-weight:normal; padding-right:10px;">Enquiry<br>
</td>
</tr>
<tr>
<td height="12px" colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2" align="center" style="line-height:16px; font-family:arial; font-size:12px; color:#888888; text-align:left;">
<table cellspacing="0" cellpadding="0">
<tr>
      <td width="200px" style="font-weight:bold;">Full Name: </td> 
      <td width="100px">:</td>
      <td>'.$_POST['name'].'</td> 
      </tr>
      
      <tr>
      <td width="200px" style="font-weight:bold;">Email Id:  </td> 
      <td width="100px">:</td>
      <td>'.$_POST['email'].'</td>
      </tr>
      
      <tr>
      <td width="200px" style="font-weight:bold;">Contact: </td> 
      <td width="100px">:</td>
      <td>'.$_POST['contact'].'</td> 
      </tr>

      <tr>
      <td width="200px" style="font-weight:bold;">Comment: </td> 
      <td width="100px">:</td>
      <td>'.$_POST['msg'].'</td> 
      </tr>
      
      </table>
      
      <br/><br/>
      
      Thanks & Regards <br/>
      Hombuilt Team <br/>
      Account Manager - Hombuilt Cell <br/>
      www.hombuilt.com<br/>
      enquiry@hombuilt.com<br/><br/>
    
      </td>
      </tr>
      <tr>
      <td height="12px">&nbsp;</td>
      </tr> 
      </table>
      </td>
      </tr>
      </table>
      </td>
      </tr>
      </table>
      </center>';
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Hombuilt <info@hombuilt.com>' . "\r\n"; 
      if(mail($to, $subject, $message, $headers))
      {
     echo "<script>alert('Your Request Sent Successfully')</script>";
      }
      else
      {
        echo "<script>alert('Unable to Sent Please try Again !!!!!!!')</script>";
      }
      }

?>
<!doctype html>
<html>

<head>
   <title> Contact | One solution for Online Home services and maintenance </title>
    <meta name="keywords" content=""/>
  <meta name="description" content=""/>
    <?php include 'inc/head.php';?>

    <script type="text/javascript">
function numericFilter(txb)
{
  txb.value = txb.value.replace(/[^\0-9]/ig,"");
}
</script>

   <script>
  function validContact()
  {
    var number1 = /^([1-9][0-9]*|0)$/;
    if(document.form1.name.value == '')
    {
      
      alert('Please Enter Your Name');
      document.form1.name.focus();
      return false;
    }

      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   //if(!document.v_form.email.value.match(emailPattern))
    if(document.form1.email.value == '')
    {
      
      alert('Please Enter Your Email Id');
      document.form1.email.focus();
      return false;
    }
    else
    if(!document.form1.email.value.match(emailPattern))
    {
      
      alert('Please Enter Correct Email Id');
      document.form1.email.focus();
      return false;
    }
    if(document.form1.contact.value == '')
    {
      
      alert('Please Enter Your Contact Number');
      document.form1.contact.focus();
      return false;
    }
    else if(document.form1.contact.value.length != '10')
    {
      
      alert('Please Enter 10 digit Number Only');
      document.form1.contact.focus();
      return false;
    }
    else if(!document.form1.contact.value.match(number1))
    {
      
      alert('First Digit Non Zero');
      document.form1.contact.focus();
      return false;
    }
 
    return true;

  }
</script>

</head>

<body>

  <div id="main_container">

     <?php include 'inc/header.php';?>
    <div id="content">

            <h1><br></h1>
            <h1><br></h1>
			
			<section class="section-divider textdivider divider6">

				<img class="img img-responsive" src="themes/Files/Images/mar-17/ban3.jpg" style="width: 100%;margin-top: -9px;">

				</section>


      <!--          Do Not edit Above Page        -->

      <!-- Page section -->

      <div class="container">
        <div class="row">
          <div class="col-md-6">


              <p><br></p> 

            <!-- BEGIN DOWNLOAD PANEL -->
            <div class="panel panel-default well">
              <div class="panel-body">
                <h3> Corporate Office </h3>
                <br/>
                <p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>   4B, 4th floor, Plot No. A-8, Bigjos Tower,
                  Netaji Subhash Place,<br/> 
                      Pitampura, Delhi, 110034 <br/>
                  <i class="fa fa-phone" aria-hidden="true"></i>  +91-9910283346<br/>
                  <i class="fa fa-envelope" aria-hidden="true"></i>  info@hombuilt.com <br/>
                  <i class="fa fa-globe" aria-hidden="true"></i>  www.hombuilt.com
                </p>
                <br/>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218.74532144010618!2d77.15174062286331!3d28.691885771470808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf03e7ff62cce65c3!2sHombuilt!5e0!3m2!1sen!2sin!4v1498587703377" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>

           </div>


          <div class="col-md-6">
            
            <p><br></p> 

            <!-- BEGIN DOWNLOAD PANEL -->
            <div class="panel panel-default well">
              <div class="panel-body">
                <form action="" class="form-horizontal track-event-form bv-form" method="post" name="form1" onsubmit= "return validContact();">
                  

                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter Full Name *" name="name" autocomplete="off">
                      </div>
                     
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email Id *" name="email" autocomplete="off">
                      </div>
                      </div>
                   
                  </div>


                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" id="C_BusPhone" placeholder="Enter Mobile Number *" name="contact" onKeyUp ="numericFilter(this);" maxlength="10" title="Enter 10 digit Number only" autocomplete="off">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-comment fa-2"></i>
                        </div>
                        <textarea class="form-control" name="msg" id="Comments" rows="5" style="width:99.9%" placeholder="Enter your message here" autocomplete="off"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-12">
                      <input id="contacts-submit" type="submit" name="enquiry_submit" class="btn btn-default btn-info" value="Request Sent">
                    </div>
                  </div>
                  
                </form>
              </div>
              <!-- end panel-body -->
            </div>
            <!-- end panel -->
            <!-- END DOWNLOAD PANEL -->
          </div>
          <!-- end col-md-8 -->
          <div class="col-md-2"> </div>
        </div>
      </div>



      <!-- Page section End-->

      <!--       Do Not edit below Page     -->

    </div>
    <!-- content -->


     <?php include 'inc/footer.php';?>
  </div>
  <!-- main content -->

</body>

</html>
