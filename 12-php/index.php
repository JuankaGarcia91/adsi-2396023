<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Main Menu (PHP)"?></title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="00-template.php">Template </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>  
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3"></div>
                <?php echo "<h1 class='text-center my-5'>Main Menu (PHP)</h1>"; ?>
                <hr>
                <div class="list-group">
                    <a href="01-hello-world.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">01</span>Hello World
                    </a>
                    <a href="02-into.php" targer="_blank" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">02</span>PHP Into
                    </a>
                    <a href="03-comments.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">03</span>Comments
                    </a>
                    <a href="04-variables.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">04</span>Variables
                    </a>
                    <a href="05-string.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">05</span>String
                    </a>
                    <a href="06-oper-arithmetics.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">06</span>Operarors Arithmetics
                    </a>
                    <a href="07-oper-assignment.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">07</span>Operarors Assignment
                    </a>
                    <a href="08-oper-comparison.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">08</span>Operarors Comparison
                    </a>
                    <a href="09-oper-logics.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">09</span>Operarors Logics
                    </a>
                    <a href="10-conditional-if.php" class="list-group-item list-group-item-action">
                        <span class="badge rounded-pill bg-dark me-2">10</span>Operarors Conditional If
                    </a>
                    
                    
                </div>
            </div>
        </div>
    </main>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>