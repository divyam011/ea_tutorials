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
        <link rel="stylesheet" href="css/feedback.css">
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
        <div class="container">
          <div class="shade">
        <div class="blackboard">
          <form method="post" action="addfeedback.php">
                <div class="form" action="addfeedback.php">
                        <p>
                                <label>Name: </label>
                                <input type="text" name="name"/>
                        </p>
                        <p>
                                <label>Email: </label>
                                <input type="text" name="email"/>
                        </p>
                        <p>
                                <label>Phone: </label>
                                <input type="tel" name="phone"/>
                        </p>
                        <p>
                                <label>Subject: </label>
                                <input type="text" name="subject"/>
                        </p>
                        <p>
                                <label>Message: </label><textarea name="message"></textarea>
                        </p>
                        <p class="wipeout">
                                <input type="submit" value="Send" />
                        </p>
                </div>
          </form>
        </div>
</div>
        </div>
    </body>
</html>
