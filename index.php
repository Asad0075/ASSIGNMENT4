
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>MOVIES</title>
  </head>
  <body>

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">MOVIES</h1>
    <p class="lead"> </p>
  </div>
</div>



<div class="container" >
    <div class="row">
    <?php require_once "query.php";
    $rows  =select("SELECT * FROM movielist");
    foreach($rows as $row){?>
         <div class="col-sm-3 mt-4">
            <div class="card">
            <img src="<?php echo $row[4];?>" alt="<?php echo $row[1];?>" class="card-img-top img-fluid rounded-circle" style="height:50vh;">

                <div class="card-body">
                    <p><strong>MOVIE ID :</strong><?php echo $row[0];?></p>
                    <p><strong>MOVIE TITLE :</strong> <?php echo $row[1];?></p>
                    <p><strong>MOVIE  RATING :  </strong> <?php echo $row[2];?></p>
                    <p><strong>RELEASING DATE :</strong> <?php echo $row[3];?></p>

                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>




    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>