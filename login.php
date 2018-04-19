<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="theme.css">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="scripts.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trick or Treat Rater</title>
  </head>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="//kooldawgstar.xyz">Trick or Treat Rater</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="//kooldawgstar.xyz">Home</a></li>
                <li><a href="/login.php">Log in</a></li>
              </ul>
      <form class="navbar-form navbar-right" role="search" method="get" action="reviews.php">
        <div class="form-group">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Address" name="address" value="">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-warning">Go!</button>
            </span>
          </div>
        </div>
      </form>
          </div>
  </div>
</nav>
 Failed to connect to the database: SQLSTATE[HY000] [2002] Can't connect to local MySQL server through socket '/var/lib/mysql/mysql.sock' (2 "No such file or directory")