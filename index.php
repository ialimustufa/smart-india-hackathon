<?php
include("dbconnect.php");
session_start();

if(isset($_POST['submit'])){

    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    // Check connection
    //echo $username;
    //echo $password;

    $query = "select * from login_details where email = '$username' and password = '$password'";

    $result = mysqli_query($conn,$query);
    $result1 = mysqli_fetch_assoc($result);

    if($result1)
    {


              // print_r($_SESSION["user_id"]);
        // print_r($_SESSION["user_role"]);
        // die;
        if($_SESSION["user_role"] == "admin" )
        {
          $nameErr = "Login Successfull...!!!";
          echo '<script type="text/javascript">';
          echo "alert('$nameErr');";
          echo 'window.location="user/index.php";';
          echo '</script>';

        }
        elseif ($_SESSION["user_role"] == "manager")
        {
          $nameErr =" Login Successfull...!!";
          echo '<script type="text/javascript">';
          echo "alert('$nameErr');";
          echo 'window.location="managerprojects.php";';
          echo '</script>';
        }
        elseif ($_SESSION["user_role"] == "merchandiser")
        {
          $nameErr =" Login Successfull...!!";
          echo '<script type="text/javascript">';
          echo "alert('$nameErr');";
          echo 'window.location="merchandiseraddproject.php";';
          echo '</script>';
        }
        else {
          $nameErr =" Wrong Email and Password!!";
          echo '<script type="text/javascript">';
          echo "alert('$nameErr');";

          echo '</script>';
        }






    }
    $nameErr =" Wrong Email and Password!!";
    echo '<script type="text/javascript">';
    echo "alert('$nameErr');";

    echo '</script>';


}
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login</title>
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css1/demo.css" />
        <link rel="stylesheet" type="text/css" href="css1/style3.css" />
		<link rel="stylesheet" type="text/css" href="css1/animate-custom.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

            <header>
                <p style="font-size:50px"><a href="index.php" style="font-size:50px"></a>Pharma Global Connect </p><hr>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a>Connect the Pharma World...</a>
      </div>


    </div>
  </nav>
</section>
            </header>
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                     <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toregister"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="" method="POST">
                                <h1>Log in</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Your Email </label>
                                    <input id="username" name="username" required="required" type="email" placeholder="mymail@mail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="login button">
                                    <input type="submit" value="Login" name="submit" />
								</p>
                                <p class="change_link">
									Not a Manager yet ?Ask Admin to Add You up...
								</p>
                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </div>

    </body>
</html>
