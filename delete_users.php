<?php
include("database/admin_confi.php");
$id=$_GET['id'];
$case=$_GET['case'];

switch ($case) {
	case 'user':
		$sql="DELETE from signup WHERE id=$id";
		$result=$mysqli->query($sql);
		if($result)
		{
		    echo "<script>alert('Record Deleted!!')</script>";
		    header("location:index.php");
		}else
		{
		    echo "<script>alert('Something Went Wrong !!')</script>";
		    header("location:index.php");
		}
		
	case 'enquiry':
		$sql="DELETE from enquiry_tbl WHERE id=$id";
		$result=$mysqli->query($sql);
		if($result)
		{
		    echo "<script>alert('Record Deleted!!')</script>";
		    header("location:enquiry.php");
		}else
		{
		    echo "<script>alert('Something Went Wrong !!')</script>";
		    header("location:enquiry.php");
		}
    case 'booked order':
        $sql="DELETE from booking_tbl WHERE id=$id";
        $result=$mysqli->query($sql);
        if($result)
        {
            echo "<script>alert('Record Deleted!!')</script>";
            header("location:booking_tbl.php");
        }else
        {
            echo "<script>alert('Something Went Wrong !!')</script>";
            header("location:booking_tbl.php");
        }
		
	default:
		# code...
		break;
}
$mysqli->close();

/*$id=$_GET['id'];

$mysqli->close();
*/

?>
