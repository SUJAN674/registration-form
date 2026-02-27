<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $rollnumber=$_POST['roll_number'];
         $passwrod=$_POST['password'];
         $stmt=$conn->prepare("select * from student_details WHERE roll_number=?");
         $stmt->bind_param("s",$rollnumber);
         $stmt->execute();
         $result=$stmt->get_result();
         if($result->num_rows==1)
            {
                $student=$result->fetch_assoc();
                if($passwrod==$student['password'])
                {
                    header("LOCATION:student_dashboard.php");

                }
                else 
                    {
                       header("LOCATION:login.php");
                    }
            }
            else{
                echo "no data found";
            }
    }
    else {
        echo "post method not initial";
    }
