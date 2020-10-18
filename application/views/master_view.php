<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>
    <head>
        <title>First Bootstarp website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Crashcourse</a>
              
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto"></ul>
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin" style="font-size: 25px"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.github.com/karimabbiusi"><i class="fab fa-github-square" style="font-size: 25px"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://www.instagram.com/isuibba/"><i class="fab fa-instagram" style="font-size: 25px"></i></a>
                      </li>
                  </ul>
                </div>
              </nav>
        </header>
        <h1>Hello World</h1>
        <div class="container">
            <h1>My First Bootstrap Page</h1>
            <p>This is some text.</p>

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Brand</th>
                    <th>Model</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($aRecords as $aRecord){
                        echo "<tr>";
                        echo "<td>" . $aRecord->brand . "</td>";
                        echo "<td>" . $aRecord->model . "</td>";
                        echo "<tr>";



                    }

                    ?>
                </tbody>
              </table>

    
                <div class="col-md-4">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Karim Abbiusi</h4>
                          <p class="card-text">Persoonlijke gegevens</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
                </div>
                 <div class="col-md-4">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Karim Abbiusi</h4>
                          <p class="card-text">Persoonlijke gegevens</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">Karim Abbiusi</h4>
                          <p class="card-text">Persoonlijke gegevens</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
                </div>
              </div>
    
          </div>
          <div class="container"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.581625677047!2d5.347395015151021!3d50.949949879547454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c121662de3a72f%3A0x4f48a727671ba654!2sRuusbroeclaan%2020%2C%203500%20Hasselt!5e0!3m2!1snl!2sbe!4v1603031561331!5m2!1snl!2sbe" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
        </div>
         
         
    </body>
</html>