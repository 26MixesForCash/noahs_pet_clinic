<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--from here down...(Evan) -->

    <title>NPC Noah's Pet Clinic, Manchester: Feedback submitted</title>
  </head>
  <body>






    <!-- from here: -->

<nav class="navbar navbar-expand-sm navbar-fixed-top bg-primary navbar-dark">
  <div class="container">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.html"><img src="layer2.png" class="img-responsive" style="height: 30px"></a>
          <a class="nav-item nav-link" href="index.html">Home</a>
          <a class="nav-item nav-link" href="aboutus.html">About us</a>
          <a class="nav-item nav-link" href="appointments.html">Appointments</a>
          <a class="nav-item nav-link" href="feedbackform.html">Feedback</a>
          <a class="nav-item nav-link" href="contactus.html">Contact us</a>
        </div>
      </div>
  </div>
</nav>



<div class="jumbotron jumbotron-fluid bg-primary text-white" style="background: #555">
  <div class="container">
    <h1 class="display-1"><img src="layer2.png" class="img-responsive" style="height: 90px">   Noah's Pet Clinic</h1>
      <p class="lead">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Manchester's primary pet care specialists, since 1983.</p>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "npc";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $name = $_POST['name'];
      $pet_name = $_POST['pet_name'];
      $email = $_POST['email'];
      $comments = $_POST['comments'];
      $sql = "INSERT INTO customerfeedback (name, pet_name, email, comments) VALUES ('$name', '$pet_name', '$email', '$comments')";

      if ($conn->query($sql) === TRUE) {
          echo "Comments submitted successfully.";
          echo "<br>";
          echo "Thank you very much for your feedback.";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      ?>
    </div>
  </div>
</div>
<br><br><br>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
