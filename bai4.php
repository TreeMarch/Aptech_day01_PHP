<?php
    function longdate($timestamp){

        $temp = date("l F jS Y",$timestamp);
        return "The Date is $temp";
    }
    echo longdate(2);
?>