<?php


$DOPURL = "";
$DOPURL = $_SERVER['QUERY_STRING'];
//echo $_SERVER['QUERY_STRING'].'AAAA';
if ($DOPURL == "") {
    $_SESSION["dparametro"] = "";
    $_SESSION["dparametro1"] = "";
    if ($_GET["idd"] == "" && $_GET["ad"] == "") {
        if (isset($_GET["id"]) && isset($_GET["a"])) {
            echo "<script type='text/javascript'> location.href ='" . $_SESSION['urlO'] . ".php?op';</script>";
        }
    }
}

