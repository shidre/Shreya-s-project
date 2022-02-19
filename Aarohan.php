<!doctype html>
<head>
    <title>
        Aarohan 
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <style>
    body{
        background-color: rgb(72, 192, 240) ;
        margin-left: 50px;
        
    }
    th:hover{
    background-color: white;
  }
  #name{
   
   color:white;
   font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   font-style:normal;
   font-weight: bolder;
   font-size:74px;
   padding-top: 74px;
   text-align: center;
}

#course{
   background-color:transparent;
   color: black;
   font-family:Verdana, Geneva, Tahoma, sans-serif;
   font-weight:bold;
   font-size:15px;
   text-align: center;
   padding-left: 200px;
}
#image{
   width: 50px;
   height: 50px;
   border-radius: 50%;
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
 
 li a:hover {
   background-color:rgb(60, 172, 216) ;
   color: black;
 }
 .button{
   background-color:rgb(167, 116, 167);
   border: none;
 color: white;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 16px;
 margin: 4px 2px;
 cursor: pointer;
 }

#Name{
   width: 300px;
   text-shadow: 2px 1.5px 10px #555657;
}

#forgot-password{
   color: #00080c;
   cursor: pointer;
   
}
 
 
 table {
   border-collapse: collapse;
   width: 100%;
   
 }
 
 th{
   padding: 8px;
   text-align: center;
   
 }
 .footer-letter-spaced-text{
   font-family: 'Roboto Slab',sans-serif;
   font-weight: bolder;
   letter-spacing: 5px;

 }
 
 
 .card {
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   transition: 0.3s;
   width: 40%;
 }
 
 .card:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
 }
 
 .container {
   padding: 2px 16px;
 }
 #quotes{
   font-family: cursive;
   color:  white;
   font-weight: bolder;
   text-align: center;
   font-size: larger;
   letter-spacing: 3px;
   border-radius: 25%;
   
 }
</style>
        <nav>
            <ul id="navbar">
                <li id="navbar1"><a  class="active" ><b>Contact  |</b></a></li>
                <li id="navbar1"><a  class="active"><b>About us  |</b></a></li>
                <li id="navbar1"><a href="login.php" class="active" target="_blank"><b>student login  |</b></a></li>
                <li id="navbar1"><a href="login.php" class="active" target="_blank"><b>teacher login  |</b></a></li>
                <li id="navbar1"><a href="http://localhost/shreyaphp/signup.php" class="active" target="_blank"><b>signup |</b></a></li>              
              </ul>
            </nav>
  
    <p id="name"><img src="WhatsApp Image 2021-11-30 at 10.59.36.jpeg" id="image">Aarohan</p>
    <p id="course" >courses for you</p>
     <p id="quotes" ><b>Those who keep learning, will keep rising in life.</b></p> 
     <p id="quotes"><b>Curiosity is the beginning of knowledge, but understanding is the beginning of wisdom.</b></p>

<table>
  <tr>
    <th>
      <div class="card">
        <span class="text-uppercase footer-letter-spaced-text text-center" style="background-color: rgb(167, 116, 167); color: white;">For learning</span>
        <img src="study-hard-pictures.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <ul type="square" id="students" >
            <li id="students1"><u>start with 100 rs</u></li>
            <li id="students1"><u>recorded video and pdfs</u></li>
            <li id="students1"><u>attend live classes</u></li>
            <li id="students1"><u>you can ask question</u></li>
            <li id="students1"><u>doubt session</u></li>
          </ul>
          <button type="button" class="button" ><b>Explore more</b></button>
        </div>
      </div></th>
      <th>
        <div class="card">
          <span class="text-uppercase footer-letter-spaced-text text-center" style="background-color: rgb(167, 116, 167); color: white;" >For earning</span>
          <img src="study-hard-pictures.jpg" alt="Avatar" style="width:100%">
          <div class="container">
            <ul type="square" id="students" >
              <li id="students1"><u>distribute your knowledge</u></li>
              <li id="students1"><u>earn whenever you want</u></li>
              <li id="students1"><u>interact with your future</u></li>
              
            </ul>
            <button type="button" class="button"><b>Explore more</b></button>
          </div>
        </div></th>
  </tr>
</table>  <br><br>
<span class="text-uppercase footer-letter-spaced-text" style="border-bottom: 1.5px solid black;">Explore your skills here</span>
<br><br><table>
    <tr>
      <th>
        <div class="card" style="width: 300px;" >
          <div class="container"  >
            <img src="web-development.jpg" alt="webdevelopment" style="width:100%"  >
            <a href="webdevelopment.html" target="blank"><b>Web development</b></div></div></th></a>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="python.jpg" alt="python" style="width: 100%;" >
        <b>Programming language</b></div></div>  </th>
      <th>
        <div class="card" style="width: 300px;">
        <div class="container">
      <img src="digital-art.jpg" alt="art" style="width:100%" >
        <b>Digital art</b></div></div> </th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="guitar.jpg" alt="Music" style="width:100%" >
        <b>Music</b></div></div> </th>
    </tr>
    <tr>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="resize-16413699191958349077engineering.jpg" alt="Engineering" style="width:100%" >
        <b>Engineering subjects</b></div></div>  </th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="photography.jpg" alt="photography" style="width:100%" >
        <b>Photography</b> </div></div> </th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="colour-theory.jpg" alt="Painting" style="width:100%" >
        <b>Painting</b></div></div> </th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="resize-16413799651467672848dancergirlsymbolcreativedesign90586791.jpg" alt="Music" style="width:100%" >
        <b>Dance</b></div></div> </th>
    </tr>
    <tr>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="resize-1641370132860317038resize16413695161088320788500F189499767khk0PAsAq0ym15hGKID0bvhCyAWAjyTJ.jpg" alt="cooking" style="width:100%" >
        <b>Cooking</b></div></div></th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="video-editing.jpg" alt="video-editing" style="width:100%" >
        <b>Video editing</b></div></div></th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="resize-1641370186490447291yarnballandneedlesknittingsymbolvector35981858.jpg" alt="knit" style="width:100%" >
        <b>Knit and Stiching</b></div></div></th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="business-communication-skills.jpg" alt="skills" style="width:100%" >
        <b>Communication skills</b></div></div></th>
    </tr>
    <tr>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="resize-16413699621153904791istockphoto11953816351024x1024.jpg" alt="crafting" style="width:100%" >
        <b>Crafting</b></div></div> </th>
      <th>  <div class="card" style="width: 300px;">
        <div class="container">
      <img src="financial-modeling-valuation.jpg" alt="digital" style="width:100%" >
      <b>Digital Marketing</b></div></div></th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="resize-16413702141727707558yoga.jpg" alt="yoga" style="width:100%" >
        <b>Yoga</b></div></div></th>
      <th>
        <div class="card" style="width: 300px;">
          <div class="container">
        <img src="resize-16413694181545244839369d5e1e425da8e59e59b4e9db003c10.jpg" alt="journalism" style="width:100%" >
        <b>Journalism</b></div></div> </th>
    </tr>
  </table>
  <br><br>
<div class="panel-footer text-center">
  <small>&copy;<b>2022 by Shreya suman</b></small>
</div>
</body>
</html>
