	<?php 
	session_start();
	require_once("includes/conn.php");
	?>

<?php 
        require_once("includes/conn.php");


                   
            extract($_GET);
            //$t_id = $_['p_id'];
           // echo $t_id;
             $q= "UPDATE `footer` SET `address`='$address1' where id = '1'";
            $res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));
             if($res){
                            echo "<script>alert('Record Updated');</script>";
                }else{

                            echo "<script>alert('Record not Updated');</script>";
                }
            
                
?>