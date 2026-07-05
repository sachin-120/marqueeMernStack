<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registeration Form</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">

        <h1>Student Registration Form</h1>

        <form action="process.php" method="POST">
            
            <label>Full Name </label>
            <input type="text" placeholder="Enter Full Name" name="fullname">
            <br>
            <br>
            <label>Email </label>
            <input type="email" placeholder="Enter Email" name="email">
            <br>
            <br>

            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Enter Phone Number">
            <br>
            <br>

            <label>Age </label>
            <input type="number" placeholder="Enter Age" name="age">
            <br>
            <br>
            
            <label>Gender</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other
            <br>
            <br>
            
            <label>Course</label>
            <select name="course">
                <option value="">Select Course</option>
                <option value="B.Tech">B.Tech</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="BBA">BBA</option>
            </select>
            <br>
            <br>

            <label>Skills</label>
            <input type="checkbox" name="skills[]" value="php">PHP
            <input type="checkbox" name="skills[]" value="java">Java
            <input type="checkbox" name="skills[]" value="python">Python
            <input type="checkbox" name="skills[]" value="javascript">JavaScript
            <br>
            <br>

            <label>Password</label>
            <input type="password" name="password">
            <br>
            <br>

            <label>Confirm Password</label>
            <input type="password" name="confirmPassword">
            <br>
            <br>

            <label>Address</label>
            <textarea col="40" row="5" placeholder="Enter Address" name="address"></textarea>
            <br>
            <br>

            <input type="checkbox" name="terms" value="Accepted">I Accept Terms & Conditions
            <br>
            <br>

            <input type="submit" value="Register">
            <input type="reset" value="clear">


        </form>

    </div>

    
    
</body>
</html>