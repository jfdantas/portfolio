<?php
$config = [];
$path_base = "./views";
$path = scandir($path_base);
foreach ($path as $dir) {
    if (is_dir("$path_base/" . $dir) && $dir != '.' && $dir != '..') {
        require_once "$dir/config.php";
    }
}
// Extrai uma coluna da matriz para usar como critério de ordenação
$position = array_column($config, 'order');
// Ordena a matriz pela coluna 'idade' em ordem crescente
array_multisort($position, SORT_ASC, $config);
