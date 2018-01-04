<!-- CODE PHP -->
<?php 
    
    // if (isset($_POST['submit']) && isset($_FILES['file']))
    // {
       
  
    //         // Nếu file upload không bị lỗi,
    //         // Tức là thuộc tính error > 0
    //         if ($_FILES['file']['error'] > 0)
    //         {
    //             echo 'File Upload Bị Lỗi';
    //         }
    //         else{
    //             // Upload file
    //             move_uploaded_file($_FILES['file']['tmp_name'], './'.$_FILES['file']['name']);
    //             echo 'File Uploaded thành công';
    //         }
        
        
    // }

    if(isset($_POST['submit']) && isset($_FILES['file'])) {
        if($_FILES['file']['error'] == 0) {
            echo "Up thành công";
        } else {
            echo " lỗi rồi";
        }
    }
    else {
        echo "error";
    }
    
    ?>
    <!-- END CODE PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" >
        <input type="file" name="file">
        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>