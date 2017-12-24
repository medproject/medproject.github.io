	<?php 
	session_start();
	require_once("includes/conn.php");
	?>

<?php 
        require_once("includes/conn.php");


                   
            extract($_GET);
            //$t_id = $_['p_id'];
           // echo $t_id;
            /* $q= "UPDATE `tests` SET `name`='$name1',`age`='$age1',`gender`='$sex1',`mobile`='$phone1',`date`='$D_date1',`time`='$D_time1',`Invoice`='$invoice1',`Description`='$description1'  where id = '$t_id'";
            $res = mysqli_query($conn,$q) or die("query problem : ".mysqli_error($conn));
             if($res){
                            echo "<script>alert('Record Updated');</script>";
                }else{

                            echo "<script>alert('Record not Updated');</script>";
                }
            */
                echo $t_id;
?>