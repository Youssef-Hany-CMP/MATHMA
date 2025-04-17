<?php

    function script() {
        echo "<script>";
    }

    function _script() {
        echo "</script>";
    }

    function variable($var) {
        echo "let $var;";
    }

    function varvalue($var,$value) {
        echo "let $var = '$value';";
    }

    function consolelog($txt) {
        echo "console.log('$txt');";
    }

    function styleid($id,$prop,$value) {
        echo "document.getElementById('$id').style.$prop = '$value';";
    }

    function innerhtmlid($id,$txt) {
        echo "document.getElementById('$id').innerHTML = '$txt';";
    }

    function window($bom,$txt) {
        echo "window.$bom(" . "'$txt'" . ");";
    }
    
    // function addeventlistener($id) {
    //     echo "document.getElementById('$id').addEventListener(";
    // }

?>