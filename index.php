<?php 
session_start();
require_once("includes/conn.php");
require_once("includes/head.php");
?>
<style>
body {
  background-image: url(img/bac.jpg);
  background-repeat: no-repeat;
}
input[type=text], input[type=password] {   
    width: 100%;   
    margin: 8px 0;  
    padding: 12px 20px;   
    display: inline-block;   
    border: 2px solid green;   
    box-sizing: border-box;   
}
button {   
    background-color: #4CAF50;   
    width: 100%;  
     color: white;   
     padding: 15px;   
     margin: 10px 0px;   
     border: none;   
     cursor: pointer;
     font-size: larger;   
} 
</style>
<div class="background">
    <div class="login">
    <h1> Ebay Order Manager</h1> 
    <form action="dashboard/" method="post">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required> <br> 
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required> <br>  
            <button type="submit">Login</button>     
        </div>   
    </form>     
    </div>
</div>
<?php 
require_once("includes/footer.php");
?>