<!DOCTYPE html>
<html>
    <head>
        <title>
login 
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        form{
            box-shadow: 10px 10px 8px 10px gray;
            margin: 120px 200px 50px 200px;
            padding:30px 120px 30px 200px ;
            background-color: white;
        }
        #password{
            width: 300px;
        }
        body{
        background-image: url('Screenshot (13).PNG');
        background-repeat: no-repeat;
        background-size: cover;
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
    
    </style>
</head>
    <body>
        <nav>
            <ul id="navbar">
                <li id="navbar1"><a href="index.html" class="active" target="_blank" ><i class="fa fa-fw fa-home"></i><b>Home  |</b></a></li>
              </ul>
            </nav>
        <div  class="container" id="form" >
                <form class="form-group" name="login-form" method="post" action="index.php" >
                    
                    <label for="Name"><b>Email :</b></label><br><input type="text" placeholder="" id="Name" name="Email" class="form-control" required ><br><br>
                <label for="password"><b>Password :</b></label><br><input type="password" placeholder="" id="password" name="password" class="form-control" required >
               <br>
                <a href="/login/forgot_password" id="forgot-password"><b>Forgot password?</b></a><br><br>
                <button type="submit" class="btn btn-primary">login</button><br><br>
                <b>don't have an account ?<a href="http://localhost/shreyaphp/signup.php" target="_blank" >signup</a><br></b>
            <div class="panel-footer text-center">
                <small>&copy;<b>2022 Shreya suman</b></small>
            </div>    
            </div>
            </form> 
        <script>
const scriptURL ='https://script.google.com/macros/s/AKfycbz2Fnb5ELEpBVvr4f411zKevwJMNBwPDKrmcHetnuDbo0IDrtRT3f9EtUgDaZcdFnmi/exec'
        const form = document.forms['login-form']
        form.addEventListener('submit', e=> {
            e.preventDefault()
        fetch(scriptURL,{method: 'POST', body: new FormData(form)})
    .then(Response=> alert("Welcome to Aarohan"))
.catch(error => console.error('Error!',error.message))
})
        </script>
    </body>
</html>