<?php include "./db.php" ?>

<?php
if (isset($_POST['login'])) {
  $user_password = $_POST['password'];
  $user_email = $_POST['email'];




  $query = "SELECT * FROM admin WHERE email = '{$user_email}' ";

  $select_user_query = mysqli_query($conection, $query);

  if (!$select_user_query) {
    die("QUERY FAILD" . mysqli_error($conection));
  }


  while ($row = mysqli_fetch_array($select_user_query)) {
    $db_user_password = $row['password'];
  }


  if ($user_password == $db_user_password) {
    header("Location:../dashboard/index.php");
  } else {

    header("Location:./register_admin.php");;
  }
}
?>
<?php
  
if (isset($_POST["submit"])) {


    $fname = $_POST['fullname'];
    $code = $_POST['code'];    
    $email = $_POST['email'];
    $password = $_POST['password'];



    $query = "INSERT INTO admin(fullname,code,email,password) ";
    $query .= "VALUES('{$fname}','{$code}','{$email}','{$password}')";

    $create_post_query = mysqli_query($conection, $query);

    header('Location:./register_new.php');
}
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Faculty Login</title>
  <link rel="stylesheet" href="./style.css">
  <link href="../assets/img/logo.png" rel="icon">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Don't have an account?</h2>
        <p class="user_unregistered-text">Create your account here and join the integral part of your Evaluation System.</p>
        <button class="user_unregistered-signup" id="signup-button">Sign up</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">Have an account?</h2>
        <p class="user_registered-text">Login from here and continue your experiance with your Evaluation System.</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form" method="Post">

            <div class="forms_field">
              <input type="faculty_code" placeholder="Faculty Code" class="forms_field-input" name='code' id='code' required autofocus />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" name='email' id='email' required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" name='password' id='password' required />
            </div>
          
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot">Forgot password?</button>
            <input type="submit" value="login" name='login' class="forms_buttons-action">
          </div>
        </form>
      </div>






      <div class="user_forms-signup" >
        <h2 class="forms_title">Sign Up</h2>
        <form class="forms_form" method="Post">
          
            <div class="forms_field">
              <input type="text" placeholder="Full Name" name="fullname" id="fname" class="forms_field-input" required />
            </div>
            <div class="forms_field">
            <input type="faculty_code" placeholder="Faculty Code" name="code" id="code" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" name="email" id="email" required />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input"name="password" id="password" required />
            </div>
            
          <div class="forms_buttons">
            <input type="submit" value="submit"name="submit" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!----------Designed By Pradeep Singh Tomar------------>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
