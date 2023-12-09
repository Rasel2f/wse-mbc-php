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

                <form action="" method="post">
                    <label for="name">Name: </label>
                    <input class="mb-2" id="name" type="text" name="name"><br>

                    <label for="about">About: </label>
                    <textarea class="mb-2"  name="about" id="about" rows="3"></textarea><br>

                    <input type="checkbox" id="check" name="check" <?php echo (isset($_POST["check"]) && $_POST["check"] == "on") ? "checked" : ""; ?>>
                    <label for="check">Checkbox</label><br>

                    <input type="radio" id="male" name="gender" value="Male" <?php echo (isset($_POST["gender"]) && $_POST["gender"] == "Male") ? "checked" : ""; ?>>
                    <label for="male">Male</label><br>

                    <input type="radio" id="female" name="gender" value="Female" <?php echo (isset($_POST["gender"]) && $_POST["gender"] == "Female") ? "checked" : ""; ?>>
                    <label for="female">Female</label><br>

                    <label for="email">E-mail: </label>
                    <input class="mb-2" id="email" type="text" name="email"><br>

                    <label for="pass">Password: </label>
                    <input class="mb-2" id="pass" type="password" name="password"><br>
                    
                    <label for="photo">Photo: </label>
                    <input class="mb-2" id="photo" type="file" name="photo"><br>
                    <input class="mb-2" type="submit" value="Submit">
                </form>
            </div>
            <div class="col-6 border border-success">
                <h3 class="mb-3 text-center"><u>Form Output</u></h3>
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["about"])){
                        echo "Name: " . htmlspecialchars($_POST["name"]) . "</br>";
                        echo "About: " . htmlspecialchars($_POST["about"]) . "</br>";
                        echo "E-mail: " . htmlspecialchars($_POST["email"]) . "</br>";
                        echo isset($_POST["check"]) && $_POST["check"] == "on" ? "Checked" : "";
                        echo "</br>";
                        echo isset($_POST["gender"]) ? $_POST["gender"] : "Please Select";
                        echo "</br>";

                        //Photo
                        $allowedFileExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                        $filename = $_POST["photo"];
                        $fileParts = explode('.', $filename);                       
                        $fileExtension = strtolower(end($fileParts));                      
                        if (in_array($fileExtension, $allowedFileExtensions)) {?>
                    
                            Photo: <img src="<?php echo $_POST["photo"]; ?>" alt="Girl in a jacket" width="200" >                            
                        
                        <?php } else {
                            echo 'Photo: Please select a photo/valid photo formate.';
                        } 
                        
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