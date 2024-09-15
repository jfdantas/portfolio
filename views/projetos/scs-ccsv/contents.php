<div class="abstract">
    <h5>
        <?php
        echo "{$projects[$app]['company']}
         <br>
         [ {$projects[$app]['cycle']} ]";
        ?>
    </h5>
    <div class="ps-2 bloc">
        Após o sucesso do SCS/CA, o comandante da unidade solicitou o desenvolvimento do projeto CCSv para aprimorar a gestão do ingresso dos novos soldados. O sistema foi desenvolvido seguindo o mesmo padrão, mas com mais perfis do que o SCS/CA (8 perfis). Isso se deve ao fato de que os soldados selecionados para o serviço militar obrigatório eram encaminhados para diversas seções, como telemática, licitação, financeiro, mecânica, saúde, biblioteca, almoxarifado, entre outras.
        <p class="p-1">
            Além de participarem do processo de seleção do Exército Brasileiro, os conscritos também passavam por entrevistas nas diversas seções e departamentos da organização militar. Eles eram classificados de acordo com suas aptidões e experiências. Após o período de adaptação e treinamento básico militar, os recém-integrados às fileiras do Exército Brasileiro podiam contribuir com suas habilidades técnicas e experiências. Isso também permitia que aqueles interessados em ingressar em uma seção ou departamento específico pudessem fazê-lo.
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
                    O formulário era apresentado conforme o perfil do usuário. A recepção podia cadastrar apenas os dados principais, enquanto os médicos podiam alterar somente os campos relacionados à sua área. No exame intelectual, as alterações só podiam ser feitas por membros autorizados do perfil. Todas as modificações eram registradas no histórico.
                    <p class="p-1">
                        No perfil do entrevistador, os conscritos eram classificados para futuras entrevistas nas seções e departamentos.
                    </p>
                    <p class="p-1">
                        No perfil de cada seção e departamento, um militar graduado era responsável por conduzir a entrevista, onde os conscritos eram avaliados na teoria e na prática. Eles eram classificados para que, ao término da classificação geral, pudessem ser chamados para trabalhar na área.
                    </p>
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