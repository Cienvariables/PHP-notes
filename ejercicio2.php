<?php
$titulo = $_GET["titulo"];
//include no da error solo un warning si el file no existe
// include "template.html";
// include_once "template.html";
// require "template.html";
require_once "template.html"; // desde varios ficheros se incluye uno reutiliza el que esta en memoria, importante usar en POO
