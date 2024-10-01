<?php
    include "Connection.php";
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['empid']))
    {
?>
        
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Company</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <style>
                    h1 {
                        color: whitesmoke;
                        font-size: 30px;
                    }
                      
                </style>
                <h1>Welcome back</h1>
                <ul>
                <li><a href="addemp.php" class="a2">Add Employee</a></li>
                <li><a href="displayemp.php" class="a2">View Employees</a></li>
                <li><a href="addproject.php" class="a2">Add project</a></li>
                <li><a href="displayproject.php" class="a2">View projects</a></li>
                <li><a href="adddept.php" class="a2">Add Department</a></li>
                <li><a href="displaydept.php" class="a2">View Departments</a></li>
                <li><a href="displaylogs.php" class="a2">Employee logs</a></li>
                
                    <!-- <li><a href="#">Contact</a></li> -->
                    <li><a href="logout.php" id="b1">Logout</a></li>
                
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="container">
        <style>
        /* Define the color for the h2 element */
        h2 {
            color: darkblue; 
            font-size: 50px;/* You can replace #FF0000 with any color code you prefer */
        }
        p {
            color: darkslategray; /* Change color to green */
            font-size: 30px; /* Increase font size to 20 pixels */
        }
    </style>
            <h2> QuantumTech</h2>
            <p>We innovate. We create. We deliver.</p>
            
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>QuantumTech is a forward-thinking technology company specializing in cutting-edge solutions at the forefront of quantum computing and related technologies. Founded by a team of visionary scientists and engineers, QuantumTech is dedicated to harnessing the power of quantum mechanics to revolutionize computing, cryptography, data analysis, and beyond.</p>
        </div>
    </section>

    <!--<section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <ul>
                <li>Web Development</li>
                <li>Mobile App Development</li>
                <li>UI/UX Design</li>
                <li>Data Analytics</li>
            </ul>
        </div>
    </section>

     <section id="contact"> -->
        <!-- <div class="container"> -->
            <!-- <h2>Contact Us</h2> -->
            <!-- <p>Have a project in mind? Let's discuss!</p> -->
            <!-- <form> -->
                <!-- <input type="text" placeholder="Name"> -->
                <!-- <input type="email" placeholder="Email"> -->
                <!-- <textarea placeholder="Message"></textarea> -->


<?php
}else{
    header("Location: index.php");
    exit();
}