<?php

$url = $_SERVER['REQUEST_URI'];
$token = strtok($url, "/");
$token = strtok("/");

$index = "";
$about = "";
$services = "";
$gallery = "";
$contact = "";
$faq = "";


if ($token == "index.php") {
  $index = "current_page_item";
  $nombrePagina = "Inicio";
} else if ($token == "about.php") {
  $about = "current_page_item";
  $nombrePagina = "Especialista";
}else if ($token == "services.php") {
  $services = "current_page_item";
  $nombrePagina = "Especialidades";
}else if ($token == "faq.php") {
  $faq = "current_page_item";
  $nombrePagina = "Preguntas";
}else if ($token == "gallery.php") {
  $gallery = "current_page_item";
  $nombrePagina = "Galería";
}else if ($token == "contact.php") {
  $contact = "current_page_item";
  $nombrePagina = "Contacto";
}else{
  $nombrePagina = "Tu Mejor Sonrisa";
}

?>