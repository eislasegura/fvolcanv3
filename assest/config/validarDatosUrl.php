<?php


$ACTUALURL = "";
$OPURL = "";
$OPURL = $_SERVER['QUERY_STRING'];
$ACTUALURL = $_SERVER['PHP_SELF'];

if ($OPURL == "") {
    $id_dato = "";
    $accion_dato = "";
    $_SESSION["urlo"] = "";   
}

if ($OPURL != "") {
    if ($_GET["id"] == "" && $_GET["a"] == "") {
        echo "<script type='text/javascript'> location.href ='" . $ACTUALURL . "';</script>";
    }
}
