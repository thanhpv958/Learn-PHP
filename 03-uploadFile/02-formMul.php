<html>
    <head>
        <title>Upload Mul File</title>
    </head>

    <body>
        <form action="./02-uploadMul.php" method="POST" enctype="multipart/form-data" >
            <input type="file" name="fileupload[]" >
            <input type="file" name="fileupload[]" >
            <input type="file" name="fileupload[]" >
            <input type="submit" value="Submit">
        </form>

    </body>
</html>