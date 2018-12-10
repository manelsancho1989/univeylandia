<?php
session_start();
 
define("SYSUSER",'admin');
define("SYSPASSWORD",'secret');
 
start();
 
/**
 *  start processing the login form
 */
function start(){
 if(isset($_POST['login'])){
 if(authenticate()){
 // display secured content if user logged in successfully
 display_secured_content();
 }else{
 // display login form again with message
 display_login_form('Invalid username or password.');
 }
 }else if(isset($_GET['action']) && $_GET['action'] == 'logout'){
 logout();
 }else{
 display_login_form();
 }
}
 
/**
 * display the login form. If $msg is passed, display it as an error message
 * @param string $msg error message
 */
function display_login_form($msg=''){
 ?>
 <style>
 .error {
 color: #ff0000;
 }
 </style>
 <form action="login.php" method="post">
 <p class="error">
 <?php echo $msg; ?>
 </p>
 <fieldset name="logininfo">
 <legend>Login</legend>
 <label for="username">Username:</label> 
 <input type="text" name="username" id="username" /><br /> 
 <label for="password">Password:</label>
 <input type="password" name="password" id="password" /><br /> 
 <input type="submit" name="login" value="Login">
 </fieldset>
 </form>
 <?php 
}
 
/**
 *  display secured content to the logged in user
 */
function display_secured_content(){
 ?>
 <h1>
 Welcome
 <?php echo $_SESSION['username'];?>
 </h1>
 <p>Welcome to the member area!</p>
 <p>
 <a href="login.php?action=Logout">logout</a>
 </p>
 <?php 
}
 
/**
*   validate user's inputs against predefined account info
*   @return true if user authenticates successfully, otherwise
*         return false
*/
function authenticate(){
 if(isset($_POST['username']) && isset($_POST['password'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 if($username == SYSUSER  && $password == SYSPASSWORD){
 $_SESSION['username'] = SYSUSER;
 session_write_close();
 return true;
 }
 else{
 return false;
 }
 }
}
/**
* logout
*/
function logout(){
 if(isset($_COOKIE[session_name()])){
     setcookie(session_name,'',time() - 3600, '/');
 }
 $_SESSION = array();
 session_destroy();
 
 header('location: login.php');
}