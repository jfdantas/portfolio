<div class="abstract">
    <h5>
        <?php
        echo "{$projects[$app]['company']}
         <br>
         [ {$projects[$app]['cycle']} ]";
        ?>
    </h5>
    <div class="ps-2 bloc">
        Após o desenvolvimento dos sistemas SCT (Sistema de Controle Telemática), SCS/CA (Sistema de Comissão de Seleção do Corpo de Alunos), SCS/CCSv (Sistema de Comissão de Seleção da Companhia de Comando e Serviço) e SR/2 (Sistema R/2), surgiu a necessidade de centralizar a gestão de dados, usuários, funções e relatórios.
        <p class="p-1">
            Para atender a essa demanda, o SCT foi reformulado, proporcionando mais controle e agilidade na gestão do CPOR/SP, resultando no surgimento do SAT (Sistema de Acesso Telemática).
        </p>
        <p class="p-1">
            O SAT é um sistema de controle de acessos integrado ao SCT, acessível apenas ao administrador do SCT, que é responsável pelo gerenciamento e proteção das informações.
        </p>
        <p class="p-1">
            Com o SAT, os usuários não precisam mais se cadastrar separadamente para cada sistema ou para o servidor proxy (SQUID). As credenciais agora são compartilhadas entre servidores, serviços e sistemas, facilitando tanto para o administrador quanto para o usuário final.
        </p>
    </div>
</div>
<?php
$filename = "views/$page/$app/cap.jpg";
if (file_exists($filename)) {
?>
    <div class="mt-2 mb-1 cap">
        <img src="<?= $filename ?>">
    </div>
<?php } ?>
<div class="mt-2">
    <h5>O sistema foi desenvolvido em:</h5>
    <hr class="mb-1">
    <div class="tags">
        <ul>
            <li>
                <ul>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>ShellScript</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                    <li>CSS</li>
                    <li>HTML</li>
                    <li>XML</li>
                    <li>Servidor Linux</li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="mt-2 mb-1">
    <h5>Páginas e ações:</h5>
    <hr class="mb-1">
    <ul>
        <li class="text-bold pt-1">
            Usuários
            <ul class="text-normal">
                <li>
                    Após o usuário se cadastrar no SAT, o administrador recebe uma notificação sobre o novo cadastro. Cabe ao administrador restringir os acessos, pois, apesar de existirem quatro sistemas diferentes, nem todos os militares podem ter acesso a todos eles. Além disso, os militares podem mudar de função dependendo da época.
                    <p class="p-1">
                        O sistema contabiliza quantos militares (usuários) estão cadastrados, separados por grupo e status (ativos ou não). Dentro de cada perfil de usuário, o administrador pode gerir melhor os acessos, garantindo um controle mais eficiente.
                    </p>
                </li>
            </ul>
        </li>
    </ul>
</div>