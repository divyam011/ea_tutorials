<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel ="stylesheet" href = "css/index.css">
        <title></title>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #212020">
          <div class="container"  >
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#myPage"><img src="ea_logo.png" alt="logo" style="width:40px; margin-top: -10px;
    margin-left: -35px;"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php">HOME</a></li>
                <li><a href="library.php">LIBRARY</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <br><br><br>
        <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-sm-6 portfolio-item">
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://www.briskmind.in/wp-content/uploads/2016/11/aptitude-test.png" alt="" style="width:209px; "></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Aptitude</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 portfolio-item">
          <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://www.hte.rajasthan.gov.in/dept//department_of_technical_education/btu/uploads/images/offered_cources/b-tech-admission-2016-250x250.png" alt="" style="width: 200px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">B. TECH</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>

      </div>

      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
</body>
</html>
