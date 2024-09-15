<?php
$config["projetos"] = [
    "order" => "1",
    "name" => "Projetos",
    "title" => "Os projetos",
];

if ($app) {
    require "views/projetos/$app/config.php";
}
