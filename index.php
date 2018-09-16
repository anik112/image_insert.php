<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Insert</title>
    <link rel="stylesheet" href="public/bootstrap.min.css">
</head>
<body>
    <div class='container'>
        <div class='card my-5'>
        <div class='card-body'>
            <form enctype="multipart/form-data" action="upload.php" method="get">
                <h2>Select image to upload:</h2>
                <input type="file" name='image' class='from-control my-3'/>
                <input type="submit" name="submit" value="UPLOAD" class='btn btn-outline-primary'/>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            </form>
        </div>
        </div>
    </div>
</body>
</html>