<?php

include("../utils/dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $pages = $_POST['pages'];
    

    $sql = "INSERT INTO `books` (`title`, `pages`, `price`) VALUES ('$title', '$pages', '$price')";

    try {
        mysqli_query($conn,$sql);
        echo "<h4>Books inserted successfully</h4>";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
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
    .log {
        display: flex;
        justify-content: center;
    }

    h3 {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
</style>

<body>

    <h3>Insert Books</h3>

    <div class="log">


        <form action="insert.php" method="post" style="width:50%;">

            <div class="mb-3">

                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">

            </div>


            <div class="mb-3">
                <label for="pages" class="form-label">Pages</label>
                <input type="number" class="form-control" name="pages" id="pages">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>