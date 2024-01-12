<?php

//upload images

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // //Photo
    $allowedFileExtensions = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
   
    if(!in_array($_FILES['image']['type'], $allowedFileExtensions)){
        echo 'Please select a photo/valid photo formate.';
        exit;  
    } 
    // if( $_FILES['image']['size'] > 1024*1024){  
    //     echo 'Please select a photo under 1MB';
    //     exit;  
    // } 
    move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name'] );

   
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