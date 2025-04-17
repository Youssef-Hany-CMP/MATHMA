<?php

function stampa($txt)
{
    echo $txt;
}

function printy($txt)
{
    print ("'.$txt.'");
}

function h1($class, $id)
{
    echo "<h1 class='$class' id=$id>";
}

function _h1()
{
    echo "</h1>";
}

function h2($class, $id)
{
    echo "<h2 class='$class' id=$id>";
}

function _h2()
{
    echo "</h2>";
}

function h3($class, $id)
{
    echo "<h3 class='$class' id=$id>";
}

function _h3()
{
    echo "</h3>";
}

function h4($class, $id)
{
    echo "<h4 class='$class' id=$id>";
}

function _h4()
{
    echo "</h4>";
}

function h5($class, $id)
{
    echo "<h5 class='$class' id=$id>";
}

function _h5()
{
    echo "</h5>";
}

function h6($class, $id)
{
    echo "<h6 class='$class' id=$id>";
}

function _h6()
{
    echo "</h6>";
}

function hgroup($class, $id)
{
    echo "<hgroup class='$class' id=$id>";
}

function _hgroup()
{
    echo "</hgroup>";
}

function strong($class, $id)
{
    echo "<strong class='$class' id='$id'>";
}

function _strong()
{
    echo "</strong>";
}

function p($class, $id)
{
    echo "<p class='$class' id=$id>";
}

function _p()
{
    echo "</p>";
}

function lorem()
{
    echo "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae perspiciatis impedit delectus. 
        Fugit amet officiis nemo fuga vero laborum, aperiam, quaerat eligendi inventore sed cum, 
        praesentium obcaecati illum fugiat magni?";
}

function li($class, $id)
{
    echo "<li class='$class' id=$id>";
}

function _li()
{
    echo "</li>";
}

function br($num)
{
    for ($i = 0; $i < $num; $i++)
        echo "<br>";
}

function hr()
{
    echo "<hr>";
}

function img($src, $alt, $class, $id)
{
    echo "<img src=$src alt='$alt' class='$class' id=$id>";
}

function div($class, $id)
{
    echo "<div class='$class' id=$id>";
}

function _div()
{
    echo "</div>";
}

function ins($class, $id)
{
    echo "<ins class='$class' id=$id>";
}

function _ins()
{
    echo "</ins>";
}

function span($class, $id)
{
    echo "<span class='$class' id=$id>";
}

function _span()
{
    echo "</span>";
}

function pre($class, $id)
{
    echo "<pre class='$class' id=$id>";
}

function _pre()
{
    echo "</pre>";
}

function nav($class, $id)
{
    echo "<nav class='$class' id=$id>";
}

function _nav()
{
    echo "</nav>";
}

function hdr($class, $id)
{
    echo "<header class='$class' id=$id>";
}

function _hdr()
{
    echo "</header>";
}

function section($class, $id)
{
    echo "<section class='$class' id=$id>";
}

function _section()
{
    echo "</section>";
}

function footer($class, $id)
{
    echo "<footer class='$class' id=$id>";
}

function _footer()
{
    echo "</footer>";
}

function ul($class, $id)
{
    echo "<ul class='$class' id=$id>";
}

function _ul()
{
    echo "</ul>";
}

function ol($class, $id)
{
    echo "<ol class='$class' id=$id>";
}

function _ol()
{
    echo "</ol>";
}

function form($action, $method, $enctype)
{
    echo "<form action='$action' method=$method enctype=$enctype>";
}

function _form()
{
    echo "</form>";
}

function input($type, $placeholder, $name, $id)
{
    echo "<input type=$type placeholder='$placeholder' name=$name id=$id>";
}

?>