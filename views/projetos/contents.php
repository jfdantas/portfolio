<?php
$path_project = "views/projetos/";
if ($app) {
    require $path_project . $app . "/config.php";
    $abstract = $projects[$app]['proposal'];
    $content = $path_project . $app . "/contents.php";
} else {
?>
    <?php if ($page == 'projetos'): ?>
        <div class="abstract">
            <div class="ps-2 bloc">
                Com o objetivo de solucionar problemas recorrentes, os sistemas, bots (RPA), ETL's e scripts foram desenvolvidos com grande relevância no cenário onde atua/atuou. Embora muitos não tiveram protótipos, a experiência acumulada permitiu criar soluções eficazes e adequadas para cada situação e características.
                <p class="p-1">Os códigos-fonte dos projetos apresentados não estão disponíveis para consulta devido à sua natureza exclusiva e à possibilidade de implicações legais.</p>
                <p class="p-1">Ainda assim, sinta-se à vontade para escolher um projeto e conhecer seu propósito, aplicação e características.</p>
            </div>
            <hr />
        </div>
    <?php endif ?>
    <div class="projects">
        <div class="cards">
            <?php
            $projects = [];
            $path = scandir($path_project);
            foreach ($path as $dir) {
                if (is_dir("$path_project/" . $dir) && $dir != '.' && $dir != '..') {
                    require $path_project . $dir . "/config.php";
                }
            }
            $position_project = array_column($projects, 'order');
            array_multisort($position_project, SORT_DESC, $projects);
            foreach ($projects as $key => $project) {
            ?>
                <div class="card" id="<?= $key ?>" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 40%, rgba(51, 51, 51, 1) 90%), url('<?= $path_project . $key ?>/cap-mini.jpg') #777; background-size: cover; background-position: center;" onclick="uri(this)" title="<?= $project['company'] ?>">
                    <div>
                        <?php if (file_exists($path_project . $key . "/logo.jpg")): ?>
                            <div class="logo">
                                <img src="<?= $path_project . $key . "/logo.jpg" ?>" height="48">
                            </div>
                        <?php endif ?>
                        <div class="title">
                            <?= $project['name'] ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
}
?>