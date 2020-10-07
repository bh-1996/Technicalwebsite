<?php
include'databases.php';
if(isset( $_POST['submit'] ))
{


$username = $_POST['name'];

$email =   $_POST['email'];


$phone =   $_POST['phone'];
$password_one = $_POST['password'];
$confirm_pass = $_POST['confirm'];

$pass = md5($password_one); 

$cpass= md5($confirm_pass);










 $insertquery = "insert into registertable( username, email, phone, password, confirm_password) VALUES ('$username','$email','$phone','$pass','  $cpass')";
 $query = mysqli_query($con,$insertquery);







}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>

  <style>
    


@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background: #fec107;
  padding: 0 10px;
}
.wrapper{
  max-width: 500px;
  width: 100%;
  background: #fff;
  margin: 20px auto;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
  padding: 30px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #800080;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #800080;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}
.h11{
  margin:20px auto;
  color: #ff0040;
  text-align: center;
}

.wrapper .form .inputfield .btn:hover{
  background: #1aff1a;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}

  </style>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="h11">BHANDARI TECHNICAL REGITRATION FORM</h1>
     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="wrapper">
        <div class="title">
          Registration Form
        </div>
        <div class="form">
           <div class="inputfield">
              <label>First Name</label>
              <input type="text" class="input"  name="name">
           </div>  
        
         <div class="inputfield">
              <label>Email Address</label>
              <input type="text" class="input"  name="email">
           </div> 
                 <div class="inputfield">
              <label>Phone Number</label>
              <input type="text" class="input"  name="phone">
           </div> 
      
           <div class="inputfield">
              <label>Password</label>
              <input type="password" class="input"  name="password">
           </div>  
          <div class="inputfield">
              <label>Confirm Password</label>
              <input type="password" class="input"   name="confirm">
           </div> 
        
          <div class="inputfield terms">
              <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <p>I agree to terms and conditions</p>
           </div> 
          <div class="inputfield">
            <input type="submit"  name="submit" value="Register" class="btn">
          </div>

           <div     class="text-center small">Already have an account? <a href="login.php"   style="color:blue">Login here</a></div>

        </div>


    </div>	
    	</form>
    </body>
    </html>