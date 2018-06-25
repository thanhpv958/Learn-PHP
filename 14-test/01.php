<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_FILES['image'])) {
        $abc[] = $_FILES['image']['name'];
        echo "<pre>";
        var_dump($abc);
        echo "</pre>";
        foreach($abc as $value) {
            echo "<pre>";
        var_dump($value);
        echo "</pre>";
        }
    }
 
?>
    <form method="POST" enctype="multipart/form-data" >
        <input type="file" class="form-control" id="image" name="image[]"  multiple>        
        <input type="submit" value="Submit" >      
    </form>
</body>
</html>