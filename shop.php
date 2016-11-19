<?php

if(!empty($_POST['email'])&&!empty($_POST['description'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['description'];
$to = 'arnecools@hotmail.com';
$subject = 'Order on web portfolio';


$message="Name= ".$name."\n\r email: ".$email."\n\r\n\r ".$message."\n\r";
$header="From: ".$email;

mail($to, $subject, $message, $header);
$feedback = 'Message sent';

// leeg maken als verstuurd
$_POST['name']="";
$_POST['email']="";
$_POST['description']="";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <script src="jquery.js"></script>
    <script src="shopscript.js"></script>
    <link href="Css/normalize.css" type="text/css" rel="stylesheet"> 
    <link href="Css/global.css" type="text/css" rel="stylesheet"> 
    <link href="Css/shop.css" type="text/css" rel="stylesheet"> 
<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>


<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
   <div id="wrapper">
       <header>
           <a href="index.html"><div id=logo>Arne Cools</div></a>
       </header>
       <nav>
       <hr>
        <ul class="clearfix">
            <li><a href="index.html">Home</a></li>
            <li><a href="works.html">Works</a></li>
            <li class="selected"><a href="#">Shop</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>

        </ul>
                    <hr>
       </nav>
       <div id="content">
       
       
       
       
       
       <h1>Order your required service</h1>
       <div class="clearfix">
           <div><a class="html"><div class="orderarrow 1"></div>Html3/css3</a></div>
       <div><a class="c"><div class="orderarrow 2"></div>c# c++</a></div>
       <div><a class="photoshop"><div class="orderarrow 3"></div>Photoshop</a></div>
       </div>
       
       <form action="#" method="post">
           <div>
               <label for="name">Name + Surname: </label>
               <input type="text" name="name" id="name" value="<?php echo $_POST['name'];?>">
           </div>
           <div>
                              <label for="email">E-mail adress:</label>
               <input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>">
           </div>
           <div>
                              <label for="description">Short Description:</label>
               <textarea name="description"  id="description"><?php echo $_POST['description'];?></textarea>
           </div>
           
           
           <input type="submit" value="Send">
               
           
       </form>
       
       <p id="feedback"><?php echo $feedback; ?></p>


   </div>
   
          <a class="arrowa" href = "#"><div class="arrow"></div> </a>
    
      

    
    
    </div>
</body>


</html>


