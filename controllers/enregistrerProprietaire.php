<?php

include '../configuration/config.php';
include '../models/proprietaire.php';

$numProprietaire = $_POST['numProprietaire'];
$nomProprietaire = $_POST['nomProprietaire'];
$prenomProprietaire = $_POST['prenomProprietaire'];
$adresse1Proprietaire = $_POST['adresse1Proprietaire'];
$numTel1Proprietaire = $_POST['numTel1Proprietaire'];
$emailProprietaire = $_POST['emailProprietaire'];

$proprietaire = new Proprietaire ($numProprietaire, $nomProprietaire, $prenomProprietaire, $adresse1Proprietaire,$numTel1Proprietaire,$emailProprietaire);
if ($proprietaire -> enregistrerPropietaire()){
    header("Location:../views/CreerProprietaire.php");
}