<?php
$con=mysqli_connect("localhost","root","","machine_test");
if(isset($_POST['reg']))
{
    $fnm=$_POST['fnm'];
    $lnm=$_POST['lnm'];
    $eml=$_POST['eml'];
    $dob=$_POST['dob'];
    $mob=$_POST['mob'];
    $deg=$_POST['deg'];
    $gen=$_POST['gen'];
    $hb=$_POST['hb'];
    $hbs=implode(",",$hb);
    echo "$hbs<br>";
    
    if (!empty($fnm) && !empty($lnm) && !empty($eml) && !empty($dob) && !empty($mob) && !empty($deg) && !empty($gen) && !empty($hbs))
    {
           
            
            
                $sql="insert into user_info(firstname,lastname,email,dob,mobile,designation,gender,hobbies) values('$fnm','$lnm','$eml','$dob','$mob','$deg','$gen','$hbs')";
                $res= mysqli_query($con,$sql);

                if($res==true)
                {
                    header("Location: http://localhost/machine_test/show.php");

                }
                else
                {
                echo "Error";
                }
            
        
    }
    else
    {
        {
            header("Location: http://localhost/machine_test/index.php?msg=Field is mandetory please fullfill this form!");
        }
    }

}
?>