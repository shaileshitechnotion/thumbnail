<?php

echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
echo "<style>.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: .25rem;
    transition: all .2s ease-in-out;
    max-width: 100%;
    height: auto;
    margin-bottom: 1.5rem!important;
}</style>";

echo"<div class='container'>";
echo "<h1 class='text-center text-lg-left' style='margin-bottom: 8%;margin-top: 5%;'>Thumbnail gallery from root directory and nested directory.</h1>";
echo "<div class='row'>";
	
    function listFolderFiles($dir){
        $ffs = scandir($dir);
        unset($ffs[array_search('.', $ffs, true)]);
        unset($ffs[array_search('..', $ffs, true)]);
    
        if (count($ffs) < 1)
            return;
  
        foreach($ffs as $ff){
            if(!is_dir($dir.'/'.$ff)){
            
            echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
            echo '<img src="'.$dir.'/'.$ff.'" alt="Random image" class="img-responsive img-thumbnail"   height="400px" width="300px"/>';
            echo "<p>".$dir.'/'.$ff."</p>";
            echo" </div>";}

             if(is_dir($dir.'/'.$ff)){
                 listFolderFiles($dir.'/'.$ff);
            }
        }
    }
    listFolderFiles('images');

    echo" </div>";
    echo" </div>";

 ?>