<?php 
function singleFileUpload($image, $folder, $name)
{
    $imageName = $name;
    $image->move(public_path('frontend/' . $folder), $imageName);
    return 'frontend/' . $folder . '/' . $imageName;
}


?>