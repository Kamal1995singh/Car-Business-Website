<?php
        $con=mysqli_connect("localhost","root","");
        $db=mysqli_Select_db($con,"Lolo");

        

        if(isset($_POST["ins"]))
        {
        
            $nm = $_POST["nm"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $msg = $_POST["msg"];
            $fileup = $_POST["fileToUpload"];
           
    
           
           // Insert data into the database
            $sql = "INSERT INTO kalo(`Name`,`Email-id`,`Subject`,`Message`,`Fileupd`) VALUES ('$nm','$email','$subject','$msg','$fileup')";
            $res = mysqli_query($con, $sql);

            if($res) 
            {
                echo "Data Inserted";
            } 
            else
            
            {
                echo "Data not Inserted";
            }
        }
       
        
?>

<html>
    <head>
        <title>Contact Us</title>
        <style>
        body {
            font-family: verdana;
background: url(OIP.jpeg) no-repeat center fixed;
background-size: cover;
}

*{
margin:0;
padding:0;
}

header {
position:fixed;
background-color:#000;
width:100%;
color:white;
}


header h2{
position:absolute;
margin-top: 20px;
left:30%
}

header{
height: 10%;
}



.nav{
position:absolute;
width:100%;
}

.nav a{
position:relative;
left:59%;
top: 20%;
color:white;
text-decoration:none;
margin-right:20px;
}


#grad2 {
height: 240px;
width: 404px;
background-color: pink;
align:center;
margin-top: 139px;
margin-bottom: 50px;
margin-right: 153px;
margin-left: 220px;
border-radius: 10px;

}

#box {
border: 2px solid darkgreen;
height: 240px;
width: 400px;
position: fixed;
left: 51%;
top: 30%;
box-shadow: 2px 4px 19px;
background: transparent;
border-radius: 10px;
}
.ins {
padding: 2px 50px;
font-size: 18px;
text-align: center;
cursor: pointer;
outline:none;
color: white;
background-color: green;
border:none;
border-radius: 50px;
}

</style>
    </head>
    <body>
    <header>
<h3>Contact Us</h3>
<div class="nav">
<a href="Car Page.php">Home</a>
<a href="#services">Services</a>
<a href="#testimonials">Testimonials</a>
<a href="#contact">Contact</a>
            
</div>
</header>

    <div id="box" align="center">
    <br/>
    <center>
    <h1>Welcome <br/>To Contact Us
    </h1>
    <p>Lorem ipsum dolor sit amet,consrctetur<br/></p>
    <p>adipisicing elit</p>
    </center>
    </div>
    <br/>
    <br/>
    <div id="grad2" align="left">
  
    <div class="login_form">
   <center> <h1>Login</h1></center>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="nm"/></td>
                </tr>
                
                <tr>
                    <td>Email ID:</td>
                    <td><input type="Email" name="email"/></td>
                </tr>
                <tr>
                    <td>Subject:</td>
                    <td><input type="text" name="subject"/></td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td><textarea  name="msg" rows="3" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td>File Upload:</td>
                    <td><input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf,.doc,.docx"/></td>
                </tr>
                <br/>
                <tr>
                   <center> <td><input type="submit" value="submit" class="ins" name="ins"/></td></center>
                </tr>
</div>
            </table>
        </form>
        </body>
</html>
