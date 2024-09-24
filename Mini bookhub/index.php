<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini BookHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .log{
        display: flex;
        justify-content: center;
    }
    h3{
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
</style>
<body>

    <?php

    try {
        include("utils/dbconnect.php");
        // echo "Connection Successfull.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
         <h3>Login Form</h3>

    <div class="log">

   
        <form action="utils/login.php" method="post" style="width:50%;">
            <div class="mb-3">

                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
               
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>