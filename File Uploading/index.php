<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div id="wrap">
        <div id="gallery">
            <?php
                $list = scandir('photo');
                for($i=2; $i < count($list); $i++) { //start at 2 bcoz . and .. take array[0,1]
                    $name = $list[$i];
                    echo "<img src='photo/$name' width='200'>";
                }
            ?>
        </div>

        <div id="form">
            <form action="upload.php" method='post' enctype='multipart/form-data'>
                <label for="photo">Choose a Photo</label>
                <input type="file" name="photo" id="photo">

                <input type="submit" value="Add">
            </form>
        </div>
    </div>
</body>
</html>