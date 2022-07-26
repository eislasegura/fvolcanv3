<?php


$DOPURL = "";
$DOPURL = $_SERVER['QUERY_STRING'];

if ($DOPURL == "") {
    $_SESSION["dparametro"] = "";
    $_SESSION["dparametro1"] = "";
    if ($_SESSION["dparametro"] == "" && $_SESSION["dparametro1"] == "") {
        if (isset($_GET["id"]) && isset($_GET["a"])) {
            echo "<script type='text/javascript'> location.href ='" . $_SESSION['urlO'] . ".php?op';</script>";
        }
    }
}

