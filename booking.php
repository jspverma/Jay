<?php

error_reporting(1);
include('inc/db.php');
date_default_timezone_set("asia/kolkata");
$url=$_POST['url'];

$service_address=$_POST['Address'];
$bookingID=time();
$email=$_POST['email'];
$uname=$_POST['uname'];

    
$sql="insert into enquiry_tbl(booking_id,service_address,name,email) values('$bookingID','$service_address','$name','$email')";

//echo $sql;die;
    
 $resul=$mysqli->query($sql);




if($url!='' && $url=='architects.php')
{

    //die("if");
    $flag=0;

        
                $ddate=$_POST['date'];
                $dtime=$_POST['time'];
                $bookingID=time();
               
                $email=$_POST['email'];
                $service_id="architects";
                $service_name=$_POST['service'];

        


                    $quantity="not defined";
                    $price="not defined";
                    $total="not defined";
                    $email=$_POST['email'];
                    $service_type="not defined";
                    $date=date('d-m-y');
                    $time=date("h:i:sa");

    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id."',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1,`service_name`='$service_name',`quantity`='$quantity',`price`='$price',`total`='$total',`service_type`='$service_type'";



    
            $result=$mysqli->query($Insert);

        
                if($result)
                {
                    $flag=$flag+1;
                }


            if($flag>0)
            {
                echo "<script>alert('Booking Successfully');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Booking Failed');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }

}

if($url!='' && $url=='modular-kitchen.php')
{

    //die("if modular kitchen url");
    $flag=0;

        
                $ddate=$_POST['date'];
                $dtime=$_POST['time'];
                $bookingID=time();
                $email=$_POST['email'];
                $service_id="modular-kitchen";
                $service_name=$_POST['service'];

        


                    $quantity="not defined";
                    $price="not defined";
                    $total="not defined";
                    $email=$_POST['email'];
                    $service_type="not defined";
                    $date=date('d-m-y');
                    $time=date("h:i:sa");

    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id."',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1,`service_name`='$service_name',`quantity`='$quantity',`price`='$price',`total`='$total',`service_type`='$service_type'";



    
            $result=$mysqli->query($Insert);

        
                if($result)
                {
                    $flag=$flag+1;
                }


            if($flag>0)
            {
                echo "<script>alert('Booking Successfully');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Booking Failed');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }

}

if($url!='' && $url=='interior-designers.php')
{

    //die("if modular kitchen url");
    $flag=0;

        
                $ddate=$_POST['date'];
                $dtime=$_POST['time'];
                $bookingID=time();
                $email=$_POST['email'];
                $service_id="interior-designers";
                $service_name=$_POST['service'];

        


                    $quantity="not defined";
                    $price="not defined";
                    $total="not defined";
                    $email=$_POST['email'];
                    $service_type="not defined";
                    $date=date('d-m-y');
                    $time=date("h:i:sa");

    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id."',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1,`service_name`='$service_name',`quantity`='$quantity',`price`='$price',`total`='$total',`service_type`='$service_type'";



    
            $result=$mysqli->query($Insert);

        
                if($result)
                {
                    $flag=$flag+1;
                }


            if($flag>0)
            {
                echo "<script>alert('Booking Successfully');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Booking Failed');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }

}

    
if($url!='' && $url=='solar-planting.php')
{

    //die("if modular kitchen url");
    $flag=0;

        
                $ddate=$_POST['date'];
                $dtime=$_POST['time'];
                $bookingID=time();
                $email=$_POST['email'];
                $service_id="solar-planting";
                $service_name=$_POST['service'];

        


                    $quantity="not defined";
                    $price="not defined";
                    $total="not defined";
                    $email=$_POST['email'];
                    $service_type="not defined";
                    $date=date('d-m-y');
                    $time=date("h:i:sa");

    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id."',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1,`service_name`='$service_name',`quantity`='$quantity',`price`='$price',`total`='$total',`service_type`='$service_type'";



    
            $result=$mysqli->query($Insert);

        
                if($result)
                {
                    $flag=$flag+1;
                }


            if($flag>0)
            {
                echo "<script>alert('Booking Successfully');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Booking Failed');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }

}

if($url!='' && $url=='home-improvement.php')
{

    //die("if modular kitchen url");
    $flag=0;

        
                $ddate=$_POST['date'];
                $dtime=$_POST['time'];
                $bookingID=time();
                $email=$_POST['email'];
                $service_id="home-improvement";
                $service_name=$_POST['service'];

        


                    $quantity="not defined";
                    $price="not defined";
                    $total="not defined";
                    $email=$_POST['email'];
                    $service_type="not defined";
                    $date=date('d-m-y');
                    $time=time("h:i:sa");

    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id."',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1,`service_name`='$service_name',`quantity`='$quantity',`price`='$price',`total`='$total',`service_type`='$service_type'";



    
            $result=$mysqli->query($Insert);

        
                if($result)
                {
                    $flag=$flag+1;
                }


            if($flag>0)
            {
                echo "<script>alert('Booking Successfully');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Booking Failed');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }

}


if($url!='' && $url=='flooring.php')
{

    //die("if modular kitchen url");
    $flag=0;

        
                $ddate=$_POST['date'];
                $dtime=$_POST['time'];
                $bookingID=time();
                $email=$_POST['email'];
                $service_id="flooring";
                $service_name=$_POST['service'];

        


                    $quantity="not defined";
                    $price="not defined";
                    $total="not defined";
                    $email=$_POST['email'];
                    $service_type="not defined";
                    $date=date('d-m-y');
                    $time=date("h:i:sa");

    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id."',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1,`service_name`='$service_name',`quantity`='$quantity',`price`='$price',`total`='$total',`service_type`='$service_type'";



    
            $result=$mysqli->query($Insert);

        
                if($result)
                {
                    $flag=$flag+1;
                }


            if($flag>0)
            {
                echo "<script>alert('Booking Successfully');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Booking Failed');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }

}
if($url!='' && $url=='paint.php')
{
    
    //die("if modular kitchen url");
    $flag=0;

        
                $ddate=$_POST['date'];
                $dtime=$_POST['time'];
                $bookingID=time();
                $email=$_POST['email'];
                $service_id="Paint";
                $service_name=$_POST['service'];

        


                    $quantity="not defined";
                    $price="not defined";
                    $total="not defined";
                    $email=$_POST['email'];
                    $service_type="not defined";
                    $date=date('d-m-y');
                    $time=date("h:i:sa");

    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id."',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1,`service_name`='$service_name',`quantity`='$quantity',`price`='$price',`total`='$total',`service_type`='$service_type'";



    
            $result=$mysqli->query($Insert);

        
                if($result)
                {
                    $flag=$flag+1;
                }


            if($flag>0)
            {
                echo "<script>alert('Booking Successfully');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }
            else
            {
                echo "<script>alert('Booking Failed');</script>";
                echo "<script>window.location.href=('index.php');</script>";
            }

}




else
{
    //die("else");

    //echo "url null";die;
        date_default_timezone_set("asia/kolkata");
$id=$_POST['id'];
$qty=$_POST['qty'];
//$service_name=$_GET['service_name'];

$service=$_POST['service'];

//echo $service;die;

$ddate=$_POST['date'];
$dtime=$_POST['time'];
$user_id=$_POST['user_id'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$Address=$_POST['Address'];
$url=$_POST['url'];

$bookingID=time();
$id=explode(',',$id);
$qty=explode(',',$qty);
$flag=0;


if($url==""){
    for($i=0; $i<count($qty)-1; $i++){

        //echo "<script>alert('hrllo');</script>";

        $sql="select * from tbl_products where id='".$id[$i]."'";
        $result=$mysqli->query($sql);
        $row=$result->fetch_array();

        $service_id_name=$row['services'];
        $service_name=$row['book_services'];
        $price="";

        if($service=="Installation"){
            $price=$row['installation_charge'];
        }else{
            $price=$row['repair_charge'];
        }

        $total=($qty[$i]*$price);
        $date=date('d-m-y');
        $time=date("h:i:sa");

        $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id`='$email',`service_id`='".$service_id_name."',`service_name`='$service',`quantity`='$qty[$i]',`price`='$price',`total`='$total',`service_type`='$service',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1";

       // echo $Insert;die;
        $result=$mysqli->query($Insert);
        /*if($result)
        {
            echo "goof";

        }
        else{
            die($mysqli->error($result));
        }*/
        if($result){
            $flag=$flag+1;
        }
    }
}else{
    //$service=explode(',',$service);


    $service=explode(',',$service);
    $service_id_name=$_POST['service_id_name'];
    $service=implode(',',$service);
    $date=date('y-m-d');



    $Insert="insert into `booking_tbl` SET `booking_id`='$bookingID',`user_id (email)`='$email',`service_id`='".$service_id_name."',`service_name`='$service',`booking_date`='$date',`booking_time`='$time',`delivery_date`='$ddate',`delivery_time`='$dtime',`status`=1";

    $result=$mysqli->query($Insert);


    if($result){
        $flag=$flag+1;
    }

}

if($flag>0){
    echo "<script>alert('Booking Successfully');</script>";
    echo "<script>window.location.href=('index.php');</script>";
}else{
    echo "<script>alert('Booking Failed');</script>";
    echo "<script>window.location.href=('index.php');</script>";
}
}

