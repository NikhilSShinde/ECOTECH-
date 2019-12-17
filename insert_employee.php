
<?php
require_once('config.php');

if(isset($_POST["submit"]))
{ 


$reports_to=$_POST['reports_to_manager'];
$employee_name = $_POST['employee_name'];



$sql = "insert into hierarchy(employee_type_id,name,reports_to) values ( $reports_to,$employee_name)";


if ($conn->query($sql) === TRUE)
 {
   
   echo '<script>

   		  alert("Added Successfully !");
   		  window.location = "index.php";
								
		</script>';
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}
?>




