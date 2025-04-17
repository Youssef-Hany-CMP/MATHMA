<?php

define("aifs", "align-items: flex-start;");
define("aife", "align-items: flex-end;");
define("aic", "align-items: center;");
define("ais", "align-items: stretch;");
define("aib", "align-items: baseline;");
define("tal", "text-align: left;");
define("tac", "text-align: center;");
define("tar", "text-align: right;");
define("jcfs", "justify-content: flex-start;");
define("jcfe", "justify-content: flex-end;");
define("jcc", "justify-content: center;");
define("dis", "display: none;");
define("disn", "display: none;");
define("disb", "display: block;");
define("disf", "display: flex;");
define("disg", "display: grid;");
define("disi", "display: inline;");
define("disib", "display: inline-block;");
define("disif", "display: inline-flex;");
define("disig", "display: inline-grid;");

function style()
{
    echo "<style>";
}

function _style()
{
    echo "</style>";
}

function selector($selectors, $propvalue = array())
{
    echo "$selectors {";
    for ($i = 0; $i < count($propvalue); $i++) {
        echo $propvalue[$i];
    }
    ;
    echo "}";
}

function colorhex($col)
{
    return "color: #$col;";
}

function bgcolorhex($bgcol)
{
    return "background-color: #$bgcol;";
}

function inherit($property)
{
    return "$property: inherit;";
}

function order($number) {
    return "order: $number;";
}

function margin1($all)
{
    return "margin: $all;";
}

function margin2($topbottom, $leftright)
{
    return "margin: $topbottom $leftright;";
}

function margin3($top, $leftright, $bottom)
{
    return "margin: $top $leftright $bottom;";
}

function margin4($top, $right, $bottom, $left)
{
    return "margin: $top $right $bottom $left;";
}

function padding1($all)
{
    return "padding: $all;";
}

function padding2($topbottom, $leftright)
{
    return "padding: $topbottom $leftright;";
}

function padding3($top, $leftright, $bottom)
{
    return "padding: $top $leftright $bottom;";
}

function padding4($top, $right, $bottom, $left)
{
    return "padding: $top $right $bottom $left;";
}

?>