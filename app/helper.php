<!-- important function -->
<?php
if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if(!function_exists('change_date_format')){
    function change_date_format($date,$format){
        $formattedDate=date($format,strtotime($date));
        return $formattedDate;
    }
}