<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Book A Table</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
        <div class = "container">
            <img src="w.png">
            <a class="navbar-brand" href="web1.html">EST</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="booking.html">Book A Table <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      More
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="web1.html #About">About</a>
                      <a class="dropdown-item" href="web1.html #Featured">Featured</a>
                      <a class="dropdown-item" href="fullmenu.html">Full Menu</a>
                      <a class="dropdown-item" href="#Contact">Contact</a>
                  </div>
              </li>
          </ul>
      </div>
  </div>
</nav>
</section>
<section id="About" class="bg-dark">
    <div class="container">
        <h1 style="color: orange" class="text-center"> PLEASE INPUT YOUR REQUEST</h1>
        <div class="row">
            <div class="col-sm-12" >
              <form method="POST" action="bookinclude.php">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label" style="color: white">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Name" id="inputName">
                  </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label" style="color: white">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="Email" id="inputEmail">
              </div>
          </div>
          <div class="form-group row">
            <label for="inputNoHp" class="col-sm-2 col-form-label" style="color: white">Contact</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="Contact" id="inputNoHp">
          </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0" style="color: white">Floor</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Floor" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1" style="color: white">
                1st Floor
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Floor" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2" style="color: white">
            2nd Floor
        </label>
    </div>
</div>
</div>
</fieldset>
<div class="form-group row">
    <div class="col"> 
        <label for="bday" class="col-sm-2 col-form-label" style="color: white">Date:
            <input type="date" name="Date" required pattern="\d{4}-\d{2}-\d{2}">
            <span class="validity"></span>
        </label>
    </div>
    <div class="col">
        <label for="appt-time" class="col-sm-2 col-form-label" style="color: white">Time: </label>
        <input id="appt-time" type="time" name="Time"
        min="08:00" max="22:00">
        <span class="validity"></span>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 text-center">
      <button type="submit" class="btn btn-warning text-center">Upload</button>
  </div>
</div>
</form>
<div class="col-sm-12 text-center">
    <h1></h1>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="Contact" class="bg-dark">
    <div class="container">
        <h3 class="text-center bg-darkt" style="color: white">Contact</h3>
        <div class="row bg-darkt">
            <div class="col-sm-3 text-center">
              <a href="https://www.instagram.com/fatihussalam/y">
                <div class="card-p2">
                  <img src="instagram.svg" height="80px" width="auto">
                  <br>
                  <p class="text-center">@Naufal Fattihussalam</p>
              </div>
          </a>
      </div>
      <div class="col-sm-3 text-center">
          <a href="https://instagram.com/silv_dmy">
            <div class="card-p2">
              <img src="instagram.svg" height="80px" width="auto">
              <br>
              <p class="text-center">@Silvia Damayanti</p>
          </div>
      </a>
  </div>
  <div class="col-sm-3 text-center">
      <a href="https://instagram.com">
        <div class="card-p2">
          <img src="instagram.svg" height="80px" width="auto">
          <br>
          <p class="text-center">@Novita Ayu</p>
      </div>
  </a>
</div>
<div class="col-sm-3 text-center">
  <a href="https://www.instagram.com/purbaadhi/">
    <div class="card-p2">
      <img src="instagram.svg" height="80px" width="auto">
      <br>
      <p class="text-center">@Purba Adhi W</p>
  </div>
</a>
</div>
</div>
</section>

<div class="container-fluid p-2 bg-dark">
    <p class="text-center" style="color: white">Copyright &copy; 2020</p>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>