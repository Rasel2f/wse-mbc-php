<?php

//upload images

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // //Photo
    foreach($_FILES['image']['tmp_name'] as $key => $tam_name){
                            
        $allowedFileExtensions = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];

        if(!in_array($_FILES['image']['type'][$key], $allowedFileExtensions)){
            echo 'Please select a photo/valid photo formate.';
            exit;  
        } 
        if( $_FILES['image']['size'][$key] > 1024*1024){  
            echo 'Please select a photo under 1MB';
            exit;  
        } 

        $file_name = $_FILES['image']['name'][$key];
        $file_type = $_FILES['image']['type'][$key];
        $file_tmp_name = $_FILES['image']['tmp_name'][$key];
        $file_size = $_FILES['image']['size'][$key];

        move_uploaded_file($file_tmp_name, 'img/'.$file_name );
    }



   
}

//Gallery function
function dirReader($dirname, array $exclude = array('.', '..')){
    $files =[];

    if(!is_dir($dirname)){
        return null;
    }

    if(!($imgdir = opendir($dirname))){
        return null;
    }

    while(($imgname = readdir($imgdir)) !== false){
        
        if (in_array($imgname, $exclude)) {
            continue;
        }

        $files[] = $dirname . '/' . $imgname;

    }

    closedir($imgdir);

    return $files;

}