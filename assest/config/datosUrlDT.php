<?php
//crear url
echo 'prueba acceso';
echo '- '.$_REQUEST['CREARDURL'];
echo '--- '.$_REQUEST['URLP'];
if (isset($_REQUEST['CREARDURL'])) {
    /*$_SESSION["parametro"] = $_REQUEST['IDP'];
    $_SESSION["parametro1"] = $_REQUEST['OPP'];*/
    echo 'proceso crear url';
    $id_dato = $_REQUEST['IDP'];
    $accion_dato = $_REQUEST['OPP'];
    $_SESSION["urlO"] = $_REQUEST['URLP'];
    $idd_dato = $_REQUEST['IDD'];
    $acciond_dato = $_REQUEST['OPD'];
    $_SESSION["durlO"] = $_REQUEST['URLD'];
    $iddt_dato = "";
    $acciondt_dato = "";

    
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URLT'] . ".php?op&id=".$id_dato."&a=".$accion_dato."&idd=".$idd_dato."&ad=".$acciond_dato."&iddt=".$iddt_dato."&adt=".$acciondt_dato."';</script>";
}
if (isset($_REQUEST['VERDURL'])) {
    echo 'proceso VER url';
    /*$_SESSION["parametro"] = $_REQUEST['IDP'];
    $_SESSION["parametro1"] = $_REQUEST['OPP'];*/
    $id_dato = $_REQUEST['IDP'];
    $accion_dato = $_REQUEST['OPP'];
    $_SESSION["urlO"] = $_REQUEST['URLP'];
    $idd_dato= $_REQUEST['IDD'];
    $_SESSION["durlO"] = $_REQUEST['URLD'];
    $iddt_dato = $_REQUEST['IDT'];
    $acciondt_dato = "ver";
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URLT'] . ".php?op&id=".$id_dato."&a=".$accion_dato."&idd=".$idd_dato."&iddt=".$iddt_dato."&adt=".$acciondt_dato."';</script>";
}
if (isset($_REQUEST['EDITARDURL'])) {

    echo 'proceso EDITAR url';
    /*$_SESSION["parametro"] = $_REQUEST['IDP'];
    $_SESSION["parametro1"] = $_REQUEST['OPP'];*/
    $id_dato = $_REQUEST['IDP'];
    $accion_dato = $_REQUEST['OPP'];
    $_SESSION["urlO"] = $_REQUEST['URLP'];
    $idd_dato = $_REQUEST['IDD'];
    $acciond_dato = $_REQUEST['OPD'];
    $_SESSION["durlO"] = $_REQUEST['URLD'];
    $iddt_dato = $_REQUEST['IDT'];
    $acciondt_dato  = "editar";
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URLT'] . ".php?op&id=".$id_dato."&a=".$accion_dato."&idd=".$idd_dato."&ad=".$acciond_dato."&iddt=".$iddt_dato."&adt=".$acciondt_dato."';</script>";
}
if (isset($_REQUEST['DUPLICARDURL'])) {

    echo 'proceso DUPLICAR url';
    /*$_SESSION["parametro"] = $_REQUEST['IDP'];
    $_SESSION["parametro1"] = $_REQUEST['OPP'];*/
    $id_dato = $_REQUEST['IDP'];
    $accion_dato = $_REQUEST['OPP'];
    $_SESSION["urlO"] = $_REQUEST['URLP'];
    $idd_dato= $_REQUEST['IDD'];
    $acciond_dato = $_REQUEST['OPD'];
    $_SESSION["durlO"] = $_REQUEST['URLD'];
    $iddt_dato = $_REQUEST['IDT'];
    $acciondt_dato  = "crear";
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URLT'] . ".php?op&id=".$id_dato."&a=".$accion_dato."&idd=".$idd_dato."&ad=".$acciond_dato."&iddt=".$iddt_dato."&adt=".$acciondt_dato."';</script>";
}
if (isset($_REQUEST['ELIMINARDURL'])) {

    echo 'proceso ELIMINAR url';
    /*$_SESSION["parametro"] = $_REQUEST['IDP'];
    $_SESSION["parametro1"] = $_REQUEST['OPP'];*/
    $id_dato = $_REQUEST['IDP'];
    $accion_dato = $_REQUEST['OPP'];
    $_SESSION["urlO"] = $_REQUEST['URLP'];
    $idd_dato= $_REQUEST['IDD'];
    $acciond_dato = $_REQUEST['OPD'];
    $_SESSION["durlO"] = $_REQUEST['URLD'];
    $iddt_dato = $_REQUEST['IDT'];
    $acciondt_dato  = "eliminar";
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URLT'] . ".php?op&id=".$id_dato."&a=".$accion_dato."&idd=".$idd_dato."&ad=".$acciond_dato."&iddt=".$iddt_dato."&adt=".$acciondt_dato."';</script>";
}
