<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
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
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php echo "<h1 class='text-center my-5'>Comments</h1>"; ?>
                <hr>
                <?php 
                // define the classes of button
                $classes = "btn btn-lg btn-outline-secondary";
                /*
                    btn   = button
                    btn-lg= button large
                    btn-outline-primary = button borderded blue
                */
                # print variable $classes into the class
                ?>
                <a href="javascript:;" class="<?=$classes?>">This is a Button</a>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>