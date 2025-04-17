<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="test.css"> -->
</head>

<body>
    <?php
    include "html.php";
    include "css.php";
    include "js.php";
    h1("cl1 cl2", "id1");
    stampa("Hello HTML");
    _h1();
    hr();
    br(1);
    p("cl3", "id2");
    stampa(lorem());
    _p();
    style();
    selector(".cl1 , p", ["color: green;"]);
    selector("p", [bgcolorhex("ddd"), "font-size: 50px;", tac, margin4("12px", "30px", "50px", "70px")]);
    selector("#id1", [bgcolorhex("aaa")]);
    _style();
    script();
    variable("x");
    consolelog("x");
    styleid("id1", "color", "red");
    innerhtmlid("id2","x4");
    _script();
    ?>
</body>

</html>