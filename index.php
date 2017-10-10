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
    $files = glob("images/*.*");
    echo"<div class='container'>";
    echo "<h1 class='text-center text-lg-left' style='margin-bottom: 8%;margin-top: 5%;'>Thumbnail gallery from folder.</h1>";
    echo "<div class='row'>";
    for ($i=0; $i<count($files); $i++)
     {
       $image = $files[$i];
       $supported_file = array(
               'gif',
               'jpg',
               'jpeg',
               'png'
        );
 
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_file)) {

            //echo '<img src="'.$image .'" alt="Random image" class='img-responsive' />'."<br /><br />";
            echo "<div class='col-md-3 col-sm-3 col-xs-6'>";
            echo '<img src="'.$image .'" alt="Random image" class="img-responsive img-thumbnail"   height="400px" width="300px"/>';
            
            echo" </div>";
           } else {
               continue;
           }
         }

        echo" </div>";
        echo" </div>";
      ?>