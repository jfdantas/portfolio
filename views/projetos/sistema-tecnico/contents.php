<div class="abstract">
    <h5>
        <?php
        echo "{$projects[$app]['company']}
         <br>
         [ {$projects[$app]['cycle']} ]";
        ?>
    </h5>
    <div class="ps-2 bloc">
        A empresa precisava de uma comunicação eficiente entre o OLT (Optical Line Terminal) Huawei MA5680T, o sistema MK-Auth e seus profissionais. Anteriormente, os técnicos, após a instalação do FTTH (Fiber to the Home) e da ONU (Optical Network Unit), ligavam para a central, que então iniciava o processo de inclusão do equipamento de fibra ótica na rede da empresa via terminal remoto, digitando todos os comandos necessários.
        <p class="p-1">
            Para melhorar essa dinâmica, foi desenvolvida uma aplicação com funções que incluíam localizar novos equipamentos, adicionar e buscar pelo nome ou número de série, tudo através do navegador.
        </p>
        <p class="p-1">
            Posteriormente, foi criado um aplicativo móvel para Android (disponível na Google Play) para facilitar ainda mais a gestão e o desempenho da empresa. Diversas funcionalidades de gestão foram implementadas, algumas das quais merecem destaque.
        </p>
    </div>
</div>
<div class="mt-2 mb-1 cap">
    <img src="views/<?= "$page/$app" ?>/cap.jpg">
</div>
<div class="mt-2">
    <h5>O sistema foi desenvolvido em:</h5>
    <hr class="mb-1">
    <div class="tags">
        <ul>
            <li>
                <ul>
                    <li>PHP</li>
                    <li>ShellScript</li>
                    <li>Telnet</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                    <li>CSS</li>
                    <li>HTML</li>
                    <li>Bootstrap</li>
                    <li>Servidor Linux</li>
                    <li>Android</li>
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
            Início
            <ul class="text-normal">
                <li>
                    Informações do técnico, data e clima durante uma semana com máximas e mínimas.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Ficha
            <ul class="text-normal">
                <li>
                    Lista todos clientes para futuras instalações, contendo nome, login, plano, vencimento e etc. Esses dados são buscados automaticamente de um banco de dados de outro sistema da empresa.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            ONU’s
            <ul class="text-normal">
                <li>
                    lista todas ONU’s automaticamente para inclusão na rede, com informações relevantes, número de série (se existir algum cadastro com o mesmo equipamento o sistema informa), Frame, Slote, PON, campo login do cliente que ao digitar busca no banco de dados da empresa e então seleciona o cliente, evitando então a utilização de login inexistente, botões incluir equipamento e outro para buscar informações sobre aquele equipamento.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Optical Info
            <ul class="text-normal">
                <li>
                    Listar todos equipamentos e verificar informações dos sinais.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Lista PON
            <ul class="text-normal">
                <li>
                    Listar todos equipamentos em grupos para obter mais informações.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Busca
            <ul class="text-normal">
                <li>
                    Campo de busca para localizar via número de série e login do cliente e posteriormente editar, apagar e ver detalhes do equipamento.
                </li>
            </ul>
        </li>
    </ul>
</div>