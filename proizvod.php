<?php

class Proizvod
{
    public $opremaId;
    public $naziv;
    public $cena;
    public $vrstaId;
    public $velicinaId;

    function __construct()
    {
    }

    public function sacuvajProizvod($naziv, $cena, $vrstaId, $velicinaId, $conn)
    {
        $sql = "insert into oprema values (NULL, '$naziv', '$cena', '$vrstaId', '$velicinaId')";
        return $conn->query($sql);
    }

    public function izmeniProizvod($id, $naziv, $cena, $vrstaId, $velicinaId, $conn)
    {
        $sql = "UPDATE oprema set naziv='$naziv', cena='$cena', vrstaId='$vrstaId', velicinaId='$velicinaId' where  opremaId='$id'";
        return $conn->query($sql);
    }

    public function obrisiProizvod($id, $conn)
    {
        $sql = "DELETE from oprema where  opremaId='$id'";
        return $conn->query($sql);
    }
}
