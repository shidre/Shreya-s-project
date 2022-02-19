<!DOCTYPE html>
<html>
    <head>
        <title>
Create your account
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body{
      background-image: url('Screenshot (13).PNG');
        background-repeat: no-repeat;
        background-size: cover;
        
    }

    form{
        margin: 50px 250px 50px 250px;
        box-shadow: 10px 10px 8px 10px #eef1f1;
        padding: 50px 130px 20px 130px;
        background-color: white;
        border-radius:10%;
    }
    #navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
  }
  
  #navbar1 {
    float: right;
    background-color: white;
  }
  li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none; 
  }
    li a:hover{
background-color: skyblue;
color:black;
    }
    #account{
    text-align: center;
    color: black;
    font-family: 'Roboto Slab',sans-serif,uppercase;
    font-weight: bolder;
    letter-spacing: 5px;
font-size: larger;
}
table {
    border-collapse: collapse;
    width: 100%; 
  }
  th{
    padding: 8px;
    text-align: center; 
  }
</style>
    </head>
    <body>
        <nav>
            <ul id="navbar">
                <li id="navbar1"><a href="index.html" class="active" target="_blank" ><b>Home  |</b></a></li>
              </ul>
            </nav>
           
        <form class="form-group" id="signup" name="signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <div class="panel-primary text-center">
            <p id="account">Create your account</p>
            </div><br>
            <table><tr><th>
            <label for="yourname">Name :</label>
            <input type="text" id="yourname" placeholder="" name="name" required></th><th>
            <label for="dob">D.O.B. :</label><input type="date" id="dob" name="dob" placeholder="" required></th></tr>
            <tr><th>
            <label for="Email">Email : </label><input type="email" id="Email" name="email" placeholder="" required></th><th>
            <label for="Username">Username :</label><input type="text" id="Username" name="username" placeholder="" required></th></tr>
            <tr><th><label for="Password">Password :</label><input type="password" id="Password" name="password" placeholder="" required>
            </th><th>
            Gender :<br><br><input type="radio" name="Gender" value="female"  >female
            <input type="radio" name="Gender" value="male" >male
            <input type="radio" name="Gender" value="other" >other </th></tr>
            <tr><th><label for="contact">contact :</label><input type="number" name="contact" id="contact" placeholder=""  required>
            </th><th>
            <label for="address">address :</label><input type="text" id="address" name="address" placeholder="" required></th></tr>
            <tr><th><label for="institute">institute :</label><input type="text" name="institute" id="institute" placeholder="" required>
            </th><th>
            profession :<br><br><input type="radio" name="profession" name="profession" value="teacher">teacher
            <input type="radio" name="profession" value="student" name="profession" >student
            </th></tr>
            </table><br>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-primary" >submit</button><br><br>
                <p><b>already have an account ? <a href="login.php" target="_blank" >login</a></b></p><br>
                <small>&copy;<b>2022 Shreya suman</b></small>
            </div>
        </form>
        <?php
        
        $con = mysqli_connect ("localhost","root","","signup") ;
        //check connection
        if ($con->connect_error) {
          die("Connection failed: " . $con->connect_error);
        }
        echo "Welcome"."<br/>";
        @$name=$_POST['name'];
    @$username=$_POST['username'];
    @$Gender=$_POST['Gender'];
    @$contact=$_POST['contact'];
    @$address=$_POST['address'];
    @$profession=$_POST['profession'];
    @$password=$_POST['password'];
    @$institute=$_POST['institute'];
    @$email=$_POST['email'];
    @$dob=$_POST['dob'];

        $sql = "INSERT INTO signup (name, username, Gender, contact, address, profession, Password, institute, email, dob)
VALUES ('$name', '$username','$Gender','$contact','$address','$profession','$institute','$password','$email','$dob' )";

if ($con->query($sql) === TRUE) {
  echo "Enter your details";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
        ?>
    </body>
</html>
