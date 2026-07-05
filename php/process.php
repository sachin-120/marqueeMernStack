<?php

    if($_SERVER["REQUEST_METHOD"]!="POST"){
        die("Access Denied");
    }

    //--------*------//

    $fullname=trim($_POST["fullname"]);
    $email=trim($_POST["email"]);
    $phone=trim($_POST["phone"]);
    $age=trim($_POST["age"]);
    $gender=$_POST["gender"] ?? "";
    $course=$_POST["course"] ?? "";
    $skills=$_POST["skills"] ?? [];
    $password=$_POST["password"];
    $confirmPassword=$_POST["confirmPassword"];
    $address=trim($_POST["address"]);
    $terms=$_POST["terms"] ?? "";


    $errors=[];

    if(empty($fullname)){
        $errors[]= "Full Name Is Required.";
    }
  
    //-------------

    if(empty($email)){
        $errors[]= "Email is required";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]="Invalid Email Address";
    }

     //-------------

    if(empty($age)){
            $errors[] = "Age is required.";
    }
    elseif($age < 18 || $age > 60){
            $errors[] = "Age must be between 18 and 60.";
    }

     //-------------

    if(empty($phone)){
        $errors[]="Phone Number Is Required";
    }
    elseif(!preg_match("/^[0-9]{10}$/", $phone)){
        $errors[] = "Phone Number must contain exactly 10 digits.";
    }

     //-------------

     if(empty($gender)){
        $errors[] = "Please Select Gender.";
    }

    //-----------

    if(empty($course)){
        $errors[] = "Please Select Course.";
    }

    //-----------

    if(count($skills) == 0){
        $errors[] = "Select at least one Skill.";
    }

    //-------------

    if(strlen($password) < 8){
        $errors[] = "Password must be at least 8 characters.";
    }

    //------------

    if($password != $confirmPassword){
        $errors[] = "Passwords do not match.";
    }

    //---------------

    if(empty($address)){
        $errors[] = "Address is required.";
    }

    //-------------

    if(empty($terms)){
        $errors[] = "Please Accept Terms & Conditions.";
    }

    //----------------

    if(count($errors) > 0){

        echo "<h1>Validation Errors</h1>";

        echo "<hr>";

        foreach($errors as $error){
            echo "<p style='color:red;'>$error</p>";
        }

        echo "<br>";

        echo "<a href='index.php'>Go Back</a>";

        exit();

    }


    $fullname = htmlspecialchars($fullname);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);
    $age = htmlspecialchars($age);
    $gender = htmlspecialchars($gender);
    $course = htmlspecialchars($course);
    $address = htmlspecialchars($address);


    echo "<h1>Registration Successful</h1>";

    echo "<hr>";

    echo "<h3>Student Details</h3>";

    echo "Full Name : $fullname <br><br>";

    echo "Email : $email <br><br>";

    echo "Phone : $phone <br><br>";

    echo "Age : $age <br><br>";

    echo "Gender : $gender <br><br>";

    echo "Course : $course <br><br>";

    echo "Address : $address <br><br>";

    echo "<b>Skills</b>";

    echo "<br><br>";

    foreach($skills as $skill){
        echo htmlspecialchars($skill) . "<br>";
    }

    echo "<br>";

    echo "<h3>Registration Completed Successfully</h3>";




    



?>