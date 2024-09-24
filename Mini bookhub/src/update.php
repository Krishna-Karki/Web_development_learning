<?php

include("../utils/dbconnect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT  * FROM `books` WHERE `id`='$id'";

    try {
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $updatedid = $row['id'];
            $updatedtitle = $row['title'];
            $updatedpages = $row['pages'];
            $updatedprice = $row['price'];
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $pages = $_POST['pages'];
    $price = $_POST['price'];
    


    $sql = "UPDATE `books` SET `title`='$title', `pages`='$pages', `price`='$price' WHERE `id`='$id'";

    try {
        mysqli_query($conn, $sql);
        echo "<h5>Book successfully updated</h5>";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    header("Location: view.php");
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

    <h3>Update Books</h3>

    <div class="log">


        <form action="update.php" method="post" style="width:50%;">

            <div class="mb-3">

                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" name="id" value="<?php echo $updatedid ?>" readonly>

            </div>

            <div class="mb-3">

                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $updatedtitle ?>">

            </div>


            <div class="mb-3">
                <label for="pages" class="form-label">Pages</label>
                <input type="number" class="form-control" name="pages" id="pages" value="<?php echo $updatedpages ?>">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price" value="<?php echo $updatedprice ?>">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>