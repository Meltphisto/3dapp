<?php
// Declare variables
//Specify path for the thumbnail images
$directory ='../assets/images/gallery_images';
// Only load file with following extensions
$allowed_extensions = array('jpg','jpeg','png','gif');
// An array used for seperate the extension from each file
$file_parts = array();
// Response message
$response = "";
// Opens the directory to parse the images
$dir_handle = opendir($directory);
// End of declaring

// Iterate through all files
while($file = readdir($dir_handle)){
    // First check hidden files
    if (substr($file,0,1)!='.'){
        // Splite each file name to extract the file extension
        $file_components = explode('.', $file);
        // Grab the extension token
        $extension = strtolower(array_pop($file_components));
        // Is this file a valid image. If so, add it to the response
        if (in_array($extension,$allowed_extensions)){
            // Build the response string using the ~symbol as a string separator
            $response .= $directory.'/'.$file.'~';
        }
    }
}
closedir($dir_handle);
echo substr_replace($response,"",-1);
?>