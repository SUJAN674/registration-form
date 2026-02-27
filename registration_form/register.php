<?php 

include 'db.php';

$rollnumber = $_POST['roll_number'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$date = $_POST['dob'];
$mobileno = $_POST['mobile_no'];
$emailid = $_POST['email_id'];
$password = $_POST['password'];
$college = $_POST['collegename'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$gender = $_POST['gender'];

$stmt= $conn->prepare("INSERT INTO student_details (roll_number, first_name, last_name, dob, mobile_no, email_id, password, collegename, branch, sem, gender) values(?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssss", $rollnumber, $firstname, $lastname, $date, $mobileno, $emailid, $password, $college, $branch, $sem, $gender);

if($stmt->execute())
    {
        echo "successfully ";
    }

    else
        {
            echo "failed";
        }
?>