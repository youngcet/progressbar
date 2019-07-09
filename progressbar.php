<?php
class ProgressBar{

    var $increment;
    var $addWidth;
    var $text;

    function ProgressBarText(){
        $this->text = "Loading...";
    }

    function DisplayMeter(){
        print(" <script type='text/javascript' src='jquery-min.js'></script> ");
        print(" <link rel='stylesheet' type='text/css' href='progressbar.css' /> ");

        print(" <div class='progressbar_container'> ");
        print("     <div class='progressbar_meter'> ");
		print("         <span style='width: 0%'></span> ");
		print("     </div> ");
		print(" </div> ");
    }

    function Calculate($count){
        $this->increment = 100 / $count;
    }

    function Animate(){
        $this->addWidth += $this->increment;
        $rounded = round($this->addWidth, 2);

        ?>
        
        <script> 
            $('.progressbar_meter > span').stop().animate({width: "<?= $this->addWidth ?>%"}, "fast");
        </script>
        
        <?php    
    }

    function Hide(){
        ?>
        
        <script>
            setTimeout(function(){
                $(".progressbar_container").fadeOut();
            }, 2000);
        </script>
        
        <?php
    }

} 

?>