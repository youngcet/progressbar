<?php
require_once("progressbar.php");

//create new progress bar object
$progressbar = new ProgressBar();

// display the meter container
$progressbar->DisplayMeter(); 

// assuming this data comes from the database
$data = array("item1", "item2", "item3", "item4", "item5","item6", "item7", "item8", "item9", "item10");

// set the size of the array to count
$count = sizeof($data);

//set the incerementing value
$progressbar->Calculate($count);

//loop through the returned data 
for($i=0; $i < $count; $i++){

    // This is for the buffer achieve the minimum size in order to flush data
    echo str_repeat(' ', 2480);

    //simulate long, complex function function
    usleep(500000);

    //at the end of each loop, run Animate() to move the bar
    $progressbar->Animate();

    //push the content out to the browser
    ob_flush();
    flush();
    
}

//hide the progress bar after everything is done
$progressbar->Hide();        

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Progress Bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Page Loaded Successfully!</h1>
    <p>
        <?php 
            foreach ($data as $item){
                echo $item . "<br/>";
            }
        ?>    
    <p>
</body>
</html>
