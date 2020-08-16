<?php  
    
    include("includes/config.php");

    if(isset($_POST["register"])) {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $contactNo = $_POST["contact"];
        $registrationUsername = $_POST["registrationUsername"];
        $registrationPassword = md5($_POST["registrationPassword"]);
        $dateOfJoin = date("Y-m-d");
        //echo $registrationPassword;   ENCRYPTED PASSWORD WORKING

        

        $userQuery = $con->query("INSERT INTO users VALUES('$fname', '$lname', '$contactNo', '$registrationUsername', '$registrationPassword', '$dateOfJoin', '')");

        if($userQuery) {
            header("Location: login.html");
        } else {
            echo "Failed";
        }

        

    }




    // include("includes/config.php");

    // if (isset($_POST['register'])) {

    //     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    //         if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['registrationUsername']) && isset($_POST['contact']) &&  isset($_POST['registrationPassword'])) {


    //             $fname = $_POST['firstname'];
    //             $lname = $_POST['lastname'];
    //             $contactNo = $_POST['contact'];
    //             $registrationUsername = $_POST['registrationUsername'];
    //             $registrationPassword = $_POST['registrationPassword'];
    //             $registrationPassword = md5($registrationPassword);


    //             $dateOfJoin = date("Y-m-d");

    //             $userQuery = $con->query("INSERT INTO users VALUES('$fname', '$lname', '$contactNo', '$registrationUsername', '$registrationPassword', '$dateOfJoin', '')");

    //             if ($userQuery) {
    //                 header("Location: displayUsers.php");
    //             } else {
    //                 echo "Something went wrong with the query";
    //                 exit();
    //             }
            
    //         }     
    //     } 


    // } 

      

?>



<!DOCTYPE html>
<html>
<head>
	<title> Torque | Login</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript">
        
        // function display(value) {
            
        //     var choice = document.getElementById("passowrd_selected").checked;
            
        //     if (choice) {
        //         document.getElementById("passwordDisp").innerHTML = value;    
        //     } else {
        //         document.getElementById("passwordDisp").innerHTML = "";
        //     }
            
        //     //console.log(choice);
        // }


    </script>
</head>
<body>
    
    
            <div class="registrationFormContainer" ng-app="">
                
                <a href="index.php"><img src="logo-1561819118194.png" class="mainIcon"></a>
                
                <form class="registrationForm" method="POST" action="">

                    <h3> Create a free Account</h3> <br> <br>
            
                    
                    <label for="firstname">First Name : <sup>*</sup></label>
                    <input type="text" id="firstname" ng-model="fname" name="firstname"><br>
                    <span class="firstnameError" id="error"></span>
                    
                    <label for="lastname">Last Name : <sup>*</sup></label>
                    <input type="text" id="lastname" ng-model="lname" name="lastname">
                    <span class="lastnameError" id="error"></span>
                    
                    <label for="contact">Contact Number : <sup>*</sup></label>
                    <input type="text" id="contact" name="contact" ng-model="contact">
                    <span class="contactError" id="error"></span>
                    
                    <label for="username">Username :<sup>*</sup></label>
                    <input type="text" ng-model="username" id="registrationUsername" name="registrationUsername">
                    <span class="usernameError" id="error"></span>

                    <!-- <span> Username is : {{usernames}} </span> -->

                    <br> <br>
                    
                    <label for="password"> Password :<sup>*</sup></label>
                    <input type="password" id="view_password" id="registrationPassword" onkeyup="display(this.value)"  name="registrationPassword"> <br>
                    <span id="passwordDisp"> </span> <br> <br>
                    <input type="checkbox"   name="view_password" id="passowrd_selected" onclick="display(registrationPassword.value)" value="selected" > View Password
                    

                    <span class="passwordError" id="error"></span>
<!-- 
                    <label>{{fname}}</label> <br>
                    <label>{{lname}}</label> <br>
                    <label>{{contact}}</label> <br>
                    <label>{{username}}</label> <br> -->


                    <br>
                    <input type="submit" class="btn" value="Create Account" name="register">
                    
                </form>
            </div>  

</body>
</html>