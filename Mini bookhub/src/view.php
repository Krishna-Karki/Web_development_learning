<?php

include("../utils/dbconnect.php");

$sql =  "SELECT * FROM `books`";

try {
    $result = mysqli_query($conn, $sql);
} catch (Exception $e) {
    echo $e->getMessage();
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini BookHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .container{
        border: 2px solid black;
        width: 60%;
        height: 50vh;
    }
    .log {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 3vw;

    }

    h3 {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
</style>

<body>

    <h3>View books</h3>

<div class="container">
   
<div class="log">

<?php

while ($row = mysqli_fetch_assoc($result)){
    ?>

        <div class="card" style="width: 18rem;">
            
            <div class="card-body" style="width: 200px;">

                <h5 class="card-title">
                    Title: <?php echo $row['title']?>
                </h5>
                <p class="card-text">
                    Pages: <?php echo $row['pages']?>
                </p>
                <p class="card-text">
                    Price: <?php echo $row['price']?>
                </p>

                <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">
                    Update
                </a>


                <a href="../utils/delete.php?id=<?php echo $row['id'];?>" class="btn btn-primary">
                    Delete
                </a>

            </div>
        </div>
<?php
}
?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>