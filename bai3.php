<?php
    function longdate($timestamp){
        return date("l F jS Y",$timestamp);
    }
    echo longdate(1);
?>