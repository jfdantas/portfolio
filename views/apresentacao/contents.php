<div class="abstract">
    <h5>Apresentação</h5>
    <div class="ps-2  bloc">
        Atuando na área de TI há mais de 15 anos, como desenvolvedor e analista de sistemas, infraestruturas de redes e servidores linux, instrutor e gestor.
        <div id="slide-div">
            <p class="p-1">
                Atualmente, sou analista de sistemas pleno na Sociedade Brasileira de Clínica Médica, onde gerencio toda área de TI, desenvolvo e faço manutenção em vários sites WordPress, Joomla e sistemas em Laravel e PHP com integrações de pagamentos, API’s, bancos de dados, RPA’s (automação robótica de processos), ETL e servidores local e cloud.
            </p>
            <p class="p-1">
                Fui militar temporário do Exército Brasileiro, obtive cargos e funções desde Soldado (Auxiliar técnico de sessão Telemática) até 2º Tenente (Subchefe da sessão Telemática), atuando como gestor, analista e desenvolvedor de sistemas, técnico em montagem e manutenção de computadores e servidores, redes, administração de servidores Linux, técnico em telefonia e técnico em eletrônica.
            </p>
            <p class="p-1">
                Em uma empresa de provedor de internet, tive a oportunidade de desenvolver uma pequena solução para a comunicação entre uma OLT HUAWEI(Optical Line Terminal) e ONU(Optical Network Terminal) com a equipe técnica com uma integração de um sistema web já existente e um app android que foi planejado e desenvolvido especificamente para aquela empresa.
                No Grupo Silvo Santos fui aprendiz por dois anos, atuando como técnico administrativo no departamento de Gerência de Tecnologia da Informação, onde esse departamento era responsável por todas as lojas do Baú da Felicidade.
            </p>
            <p class="p-1">
                Por todos os lugares onde passei, buscava solucionar de forma primorosa os desafios propostos ao departamento, equipe ou especificamente para mim.
            </p>
        </div>
        <button type="button" class="btn p-1" id="btnVerMais" onclick="verMais()">
            Ver mais
        </button>
    </div>
</div>
<?php
foreach ($config as $key => $content_page) {
    if ($key != 'apresentacao') {
        echo "<div class=\"$key mt-1 mb-2\" style=\"width:100%\"><h5>{$content_page['title']}<hr class=\"mb-1\"></h5>";
        require "views/$key/contents.php";
        echo "</div>";
    }
}
?>