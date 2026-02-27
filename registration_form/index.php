<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>

<link rel="stylesheet" href="style.css">


</head>

<body bgcolor="skyblue">
     <h1 align="center" style="color: black; text-shadow: 2px 2px 5px white;"><u>
    STUDENT REGISTRATION FORM
</u></h1><br>





    <form method="post" action="register.php">
        <table align="center" width="700" cellpadding="10">

        <tr>
    <td><b>Roll Number:</b></td>
    <td><input type="text" size="50" maxlength="50" style="width: 360px;" placeholder="Roll Number" name="roll_number" required></td>
</tr>


<tr>

        <td><b>Student Name:</b></td>
        <td>
        <input type="text" size="21" maxlength="50" placeholder="First Name" name="first_name" required>
        -
        <input type="text" size="21" maxlength="50" placeholder="Last Name" name="last_name" required>
        <td><br>
</tr>

<tr>
    <td><b>Date Of Birth:</b></td>
    <td>
         <input type="date" size="3" placeholder="Date" style="width: 360px;" name="dob" required > 
    </td>


<tr>
    <td><b>Mobile No:</b></td>
    <td>
    <input type="tel" 
       name="mobile_no" 
       placeholder="Enter Mobile Number" 
       pattern="[0-9]{10}" 
       maxlength="10" style="width: 360px;" 
       required >

</td>
</tr>

<tr>
    <td><b>Email Id:</b></td>
   <td> 
    <input type="email" 
       name="email_id" 
       placeholder="Enter your Email ID" style="width: 360px;"
       required >

   </td>
</tr>

<tr>
    <td><b>Password:</b></td>
   <td> <input type="password" size="50" style="width: 360px;" placeholder="password" name="password" required></td>
</tr>

<tr>
    <td><b>College Name:</b></td>
   <td> <input type="text" size="50" maxlength="50" style="width: 360px;" placeholder="Your College Name" name="collegename" required></td>
</tr>

 <tr >
    <td><b>Select Branch:</b></td>
    <td>
        <select name="branch" required >
<option value="" disabled selected hidden>----------------------------Select Your Branch-------------------------</option>   
<option>CME</option>
<option>AI&ML</option>
<option>EEE</option>
<option>ECE</option>
<option>MECH</option>
<option>CIVIL</option>
<option>Others</option>
        
    </select>
        </td>
</tr>   

<tr>
    <td><b>Semester:</b></td>
    <td>
        <select name="sem" required>
<option value="" disabled selected hidden>--------------------------select current semester----------------------</option>   
<option>1st year</option>
<option>3rd sem</option>
<option>4th sem</option>
<option>5th sem</option>
<option>6th sem</option>
</select>     
        </td>
    </tr>



    <tr>
    <td><b>Select Gender:</b></td>
    <td >
   <input type="radio" name="gender" value="male" name="gender">Male
   <input type="radio" name="gender" value="female" name="gender">Female
   <input type="radio" name="gender" value="others" name="gender">Others
</td>
</tr>

<tr>
    <td colspan="2" align="center">
        <button type="submit" class="register-btn">SUBMIT</button>

        </td>
        </tr> 


        </table>
        </form>
</body>
</html>