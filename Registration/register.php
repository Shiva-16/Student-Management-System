<?php include "./db.php" ?>

<?php
if (isset($_POST['login'])) {


  $email = $_POST['email'];
  $password = $_POST['password'];


  $query = "SELECT * FROM signup WHERE email = '{$email}' ";

  $select_user_query = mysqli_query($conection, $query);

  if (!$select_user_query) {
    die("User Not Found" . mysqli_error($conection));
  }


  while ($row = mysqli_fetch_array($select_user_query)) {
    $db_user_password = $row['password'];
  }


  if ($password == $db_user_password) {

    header("Location:./Tempo/index.php");
  } else {
    header("Location:./register.php");
  }
}

  
if (isset($_POST["submit"])) {


    $fname = $_POST['firstname'];
    $en_no = $_POST['enrollment'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    $query = "INSERT INTO signup(firstname,email,password) ";
    $query .= "VALUES('{$fname}','{$en_no}','{$email}','{$password}')";

    $create_post_query = mysqli_query($conection, $query);

    header('Location:signin.php');
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">Don't have an account?</h2>
        <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <button class="user_unregistered-signup" id="signup-button">Sign up</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">Have an account?</h2>
        <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form">

            <div class="forms_field">
              <input type="Enrollment_no" placeholder="Enrollment_no" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" required />
            </div>
          
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot">Forgot password?</button>
            <input type="submit" value="Log In" class="forms_buttons-action">
          </div>
        </form>
      </div>
      <div class="user_forms-signup">
        <h2 class="forms_title">Sign Up</h2>
        <form class="forms_form">
          
            <div class="forms_field">
              <input type="text" placeholder="Full Name" class="forms_field-input" name="fname" id="fname" required />
            </div>
            <div class="forms_field">
            <input type="Enrollment_no" placeholder="Enrollment_no"  name="en_no" id="en_no" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" name="email" id="email" required />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" name="password" id="password" required />
            </div>
            
          <div class="forms_buttons">
            <input type="submit" value="Sign up" class="forms_buttons-action">
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
