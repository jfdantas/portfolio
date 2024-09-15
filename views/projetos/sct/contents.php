<div class="abstract">
    <h5>
        <?php
        echo "{$projects[$app]['company']}
         <br>
         [ {$projects[$app]['cycle']} ]";
        ?>
    </h5>
    <div class="ps-2 bloc">
        O Sistema de Acesso Telemática foi inicialmente desenvolvido para me auxiliar como um sistema de helpdesk, focado exclusivamente no controle das funções de telemática da unidade militar. No começo, o sistema apenas gerenciava as operações básicas de telemática, garantindo que todos os equipamentos e serviços estivessem funcionando corretamente.
        <p class="p-1">
            Com o tempo, percebi a necessidade de expandir suas funcionalidades para atender melhor às demandas da unidade e ensinando os outros membros da telemática como usar. Assim, o sistema evoluiu para incluir novas ferramentas e recursos, como o monitoramento em tempo real, a gestão de incidentes e a integração com outros sistemas, serviços e servidores linux. Essa evolução permitiu uma gestão mais eficiente e centralizada, melhorando a capacidade de resolução de problemas e a manutenção dos equipamentos e instalações.
        </p>
        <p class="p-1">
            Além disso, o sistema passou a oferecer relatórios detalhados e históricos de uso, facilitando a tomada de decisões e a alocação de recursos. Com essas melhorias, o Sistema de Acesso Telemática se tornou uma peça fundamental na infraestrutura tecnológica da seção, contribuindo para a eficiência e a segurança das operações diárias.
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
                    <li>MySQL</li>
                    <li>ShellScript</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                    <li>XML</li>
                    <li>CSS</li>
                    <li>HTML</li>
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
            Início
            <ul class="text-normal">
                <li>
                    Imagens para plano de fundo padrão da Organização Militar, orientações gerais, observações e mensagens para membros da seção telemática.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Administrador
            <ul class="text-normal">
                <li>
                    Formulário para cadastro dos equipamentos de tecnologia sob a responsabilidade da seção de telemática, permitindo o rastreamento completo do histórico dos equipamentos para uma gestão mais eficiente do patrimônio, conhecido como material de carga.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            IP
            <ul class="text-normal">
                <li>
                    O Exército Brasileiro opera com diversas redes internas e é necessário cadastrar um IP reservado para cada computador. Caso o IP não seja liberado, o acesso a qualquer rede ou sistema será negado. Após o cadastro do MAC, IP, usuário, sistema operacional, tipo de equipamento, número do lacre, status (liberado/bloqueado) e descrição do equipamento, o sistema automaticamente associava o endereço MAC e um novo IP para o equipamento juntamente com o servidor DHCP automaticamente. Se um IP já estivesse reservado para outro equipamento, o sistema identificava e alertava o técnico no próprio campo IP.
                    <p class="p-1">
                        Para evitar transtornos, o sistema enviava o endereço MAC e o IP do equipamento para o servidor DHCP via ShellScript. Assim, mesmo que o usuário tentasse alterar o IP, o acesso seria negado, pois o serviço era autorizado apenas quando o MAC e o IP coincidiam.<br>
                    </p>
                    <p class="p-1">
                        Na lateral do formulário, "Máquina Local", é apresentado o IP, MAC e sistema operacional da maquina que o técnico está utilizando, agilizando as informações para o ténico, dessa forma não havendo a necessidade de abrir o terminal dar comandos para descobrir os dados de endereço ou em configurações da placa de rede.
                    </p>
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Cautela
            <ul class="text-normal">
                <li>
                    O Exército Brasileiro é amplamente reconhecido pelo cuidado e manutenção rigorosa de seus equipamentos, e isso se estende também aos equipamentos de tecnologia. Quando um militar necessita utilizar algum equipamento da seção de telemática, ele deve realizar um processo de cautela. Esse procedimento é essencial para garantir a rastreabilidade e a responsabilidade pelo uso dos equipamentos.
                    <p class="p-1">
                        Para realizar a cautela, algumas informações são cadastradas como quem solicitou, seção ou departamento, tipo de equipamento, se tem lacre, quantidade e após salvar é gerado um número único, imprime a ficha para o solicitante da cautela, essa ficha de cautela é assinada pelo chefe de seção da telemática e é informado ao solicitante que qualquer dano no equipemanto o solicitante é o responsável.
                    </p>
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Básico
            <ul class="text-normal">
                <li>
                    Contém manuais criados especificamente para resolver problemas do cotidiano da organização militar, geralmente era para os membros que acabaram de entrar na seção, eram pequenas informações e documentações de como proceder.
                    <p class="p-1">
                        Quando um problema era muito complexo, criavamos um manual com todo histórico de como resolvemos e todas as tentativas que não deram certo e anexava nessa sessão do sistema.
                    </p>
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Missão
            <ul class="text-normal">
                <li>
                    Criar, gerenciar e listar os afazeres com grau de urgência, grande importância ou complexidade, juntamente com os nomes dos técnicos que iram compor a missão com data e hora.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Laboratório
            <ul class="text-normal">
                <li>
                    Diversos programas, drivers, instruções e scripts para Linux que facilitavam o desempenho e soluções dos técnicos.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Plano de Chamada
            <ul class="text-normal">
                <li>
                    Números de contatos dos membros da seção para localização de forma rápida.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Chamados
            <ul class="text-normal">
                <li>
                    Registros de pedidos/problemas a serem resolvidos de equipamentos de informática, sonorização, infraestrutura, programação, telefonia, eletrônica, cameras de segurança (CFTV) etc.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Campo Busca
            <ul class="text-normal">
                <li>
                    Busca todos e qualquer dado cadastrado no sistema, IP, MAC, usuário, equipamento, lacre, etc.
                </li>
            </ul>
        </li>
    </ul>
</div>