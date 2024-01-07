<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dom Practice</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <style>
        textarea:focus, input:focus{
            outline: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Class Seven.</h1>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-6 border border-success">
                <h3 class="mb-3 text-center"><u>Welcome to my new dom project.</u></h3>

                <form action="" method="post" enctype="multipart/form-data">
<!-- 
                    <label for="photo">Photo: </label>
                    <input class="mb-2" id="photo" type="file" name="photo"><br> -->

                    <label for="photo2">Photos: </label>
                    <input class="mb-2" id="photo2" type="file" name="photo2[]" multiple><br>
                    <input class="mb-2" type="submit" value="Submit">
                    
                </form>
            </div>
            <div class="col-6 border border-success py-2">
                <h3 class="mb-3 text-center"><u>Form Output</u></h3>
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        // //Photo
                        // $allowedFileExtensions = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
                       
                        // if(!in_array($_FILES['photo']['type'], $allowedFileExtensions)){
                        //     echo 'Please select a photo/valid photo formate.';
                        //     exit;  
                        // } 
                        // if( $_FILES['photo']['size'] > 1024*1024){  
                        //     echo 'Please select a photo under 1MB';
                        //     exit;  
                        // } 
                        // move_uploaded_file($_FILES['photo']['tmp_name'], 'img/'.$_FILES['photo']['name'] );

                        //Photos

                        foreach($_FILES['photo2']['tmp_name'] as $key => $tam_name){

                            $file_name = $_FILES['photo2']['name'][$key];
                            $file_type = $_FILES['photo2']['type'][$key];
                            $file_tmp_name = $_FILES['photo2']['tmp_name'][$key];
                            $file_size = $_FILES['photo2']['size'][$key];

                            move_uploaded_file($file_tmp_name, 'img/'.$file_name );
                        }


                        // print_r($_FILES);
                       
                    
                    } else {
                        echo "Please Fill the form.";
                    }


                ?>
            </div>
        </div>
    </div>



    

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>