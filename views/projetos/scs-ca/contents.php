<div class="abstract">
    <h5>
        <?php
        echo "{$projects[$app]['company']}
         <br>
         [ {$projects[$app]['cycle']} ]";
        ?>
    </h5>
    <div class="ps-2 bloc">
        Tive a iniciativa de sugerir o desenvolvimento do sistema para melhorar a gestão dos alistados para o serviço militar obrigatório, que anteriormente era realizada em fichas de papel (A4). Com o objetivo de eliminar o uso de papel (em defesa do meio ambiente e economizar verba pública federal), agilizar o processo de seleção e evitar a perda de fichas pelos candidatos, o que os obrigava a refazer todos os testes, causando atrasos nos demais processos.
        <p class="p-1">
            Meus superiores receberam a ideia com bons olhos e me desafiaram a desenvolver um sistema de teste em uma semana. Se o sistema se mostrar funcional, será implementado na unidade militar.
        </p>
        <p class="p-1">
            Após o sistema se mostrar eficiente, ele foi implementado, permitindo que o comandante da unidade visualizasse informações em tempo real através de gráficos e baixasse esses dados para uso otimizado. Além disso, os departamentos e seções envolvidos no alistamento também passaram a usufruir do sistema de forma eficaz. Durante todo o processo de seleção, o envolvimento de diversas áreas exigiu perfis diferentes para cada etapa. Anteriormente, as fichas de papel passavam de mão em mão, mas agora, com o sistema, os usuários podem ter até 8 perfis distintos. Alguns desses perfis são destinados a especialidades como médicos e dentistas, que possuem especificidades diferentes dos demais. Dessa forma, só é permitida a visualização dos dados específicos de cada perfil.
        </p>
        <p class="p-1">
            Com a implementação do sistema, foi possível centralizar todas as informações relevantes, desde a inscrição dos candidatos até a seleção final, facilitando o acompanhamento e a tomada de decisões. O sistema também permitiu a integração de diversas funcionalidades, como o agendamento de entrevistas, a avaliação de desempenho e a geração de relatórios detalhados.
        </p>
        <p class="p-1">
            Essa iniciativa não só melhorou significativamente a gestão do processo seletivo, mas também serviu como um modelo para futuros projetos de automação e gestão dentro da unidade militar, demonstrando o potencial da tecnologia para aprimorar nossas operações diárias.
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
                    <li>JavaScript</li>
                    <li>JQuery</li>
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
                    Cada perfil é único. O administrador, que neste caso é o comandante, tem acesso a todos os dados em tempo real, com uma abordagem voltada para a gestão, incluindo gráficos, fichas completas de cada alistado e informações sobre quais militares realizaram cada etapa. Nos outros perfis, os candidatos do dia são apresentados em tempo real, permitindo edição ou visualização conforme necessário.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Ficha
            <ul class="text-normal">
                <li>
                    O formulário era apresentado conforme o perfil do usuário. A recepção só podia cadastrar os dados principais, enquanto os médicos podiam alterar apenas os campos relacionados à sua área. No exame intelectual, as alterações só podiam ser feitas por membros autorizados do perfil. Todas as modificações eram registradas no histórico.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Impressora
            <ul class="text-normal">
                <li>
                    Todos os candidatos do dia eram listados, e em cada perfil apareciam apenas aqueles que haviam passado pela respectiva etapa.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Busca
            <ul class="text-normal">
                <li>
                    Todos os perfis podem buscar pelos dados dos candidatos, com a possibilidade de refinar os resultados utilizando diversos filtros, como data, exame intelectual, exame físico, aprovados, selecionados, convocados, entre outros. Além disso, é possível baixar os resultados em planilhas. Após a listagem dos resultados, os candidatos são classificados com ícones diferentes, facilitando a visualização.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Nas laterais do sistema
            <ul class="text-normal">
                <li>
                    Os perfis podem visualizar os dados do dia, incluindo totais, aptos e inaptos na saúde, intelectual e físico, no lado esquerdo. No lado direito, há filtros pré-definidos como alistados, intelectual, aprovados, entre outros.
                </li>
            </ul>
        </li>
    </ul>
</div>