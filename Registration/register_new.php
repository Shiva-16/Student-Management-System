<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title class="logo">Registration</title>
  <link rel="stylesheet" href="./style.css">
  <link href="../assets/img/logo.png" rel="icon">

</head>
<body>
<!-- partial:index.partial.html -->


<section class="user">

  <div class="user_options-container">
    
    <div class="user_options-text">
      <div class="user_options-registered">
        <h2 class="user_registered-title">Student Account?</h2>
        <p class="user_registered-text">Students can Login from here and continue experiance with your Evaluation System.</p>
        <form class="forms_form" method="POST" action="./register_student.php">
          <div class="forms_buttons">
            <button class="user_registered-login" id="login-button">Login</button>
          </div>
        </form>
        
      </div>
    </div>

    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Faculty Account?</h2>
        <p class="user_registered-text">Faculty can Login from here and continue Evaluation System.</p>
        <form class="forms_form" method="POST" action="./register_admin.php">
          <div class="forms_buttons">
            <input type="submit" value="LOGIN" class="forms_buttons-action">
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
