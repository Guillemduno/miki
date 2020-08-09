<?php

function select_seccio($id_seccio)
{

    // $sql = "SELECT nom, descripcio from proyecto WHERE id = $id_proyecto"
    $sql = "SELECT id, nom, id_seccio FROM projectes where id_seccio = $id_seccio";
    //echo 'seccioa fucntion: '.$sql;
    return $sql;

}
// Permet fer un select passant tres camps, la taula i el Where.
// Retorna la consulta.
function general_select($camp1, $camp2, $camp3, $taula, $item, $r_item)
{
    $sql = "SELECT $camp1, $camp2, $camp3 from $taula WHERE $item = $r_item";
    return $sql;
}
