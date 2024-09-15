<div class="abstract">
    <h5>
        <?php
        echo "{$projects[$app]['company']}
         <br>
         [ {$projects[$app]['cycle']} ]";
        ?>
    </h5>
    <div class="ps-2 bloc">
        O Sistema R/2, foi desenvolvido com a finalidade de modernizar/agilizar os registros dos alunos formados Oficial R/2 do CPOR/SP(Centro de Preparação de Oficiais da Reserva de São Paulo), possibilitando melhor gestão dos dados dos Ex-Alunos para diversas ações.
        <p class="p-1">
            Com esse sistema ficou mais fácil obter as informações e garantir mais agilidade para aqueles que necessitam dos documentos de alterações, contabilização de tempo de serviço, até mesmo para um evento chamado de “Encontro de Turmas”, onde os Oficiais R/2 do CPOR/SP se encontravam na Organização Militar.
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
                <li>Formulário para cadastro</li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Cursos
            <ul class="text-normal">
                <li>
                    Contabiliza quantos Oficiais R/2 foram cadastrados por curso/estágio.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Turmas
            <ul class="text-normal">
                <li>
                    Contabiliza quantos Oficiais R/2 foram cadastrados por ano da turma.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Filtros
            <ul class="text-normal">
                <li>
                    Por estrelas, e-mail, telefone, turma, botão para visualizar cada cadastro e podendo exportar(baixar) o resultado para uma planilha.
                </li>
            </ul>
        </li>
        <li class="text-bold pt-1">
            Busca
            <ul class="text-normal">
                <li>
                    Procura dados cadastrados como nome, e-mail, profissão, telefone e observações.
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="mt-2 mb-1">
    <h5>Dados cadastrados:</h5>
    <hr class="mb-1">
    <ul>
        <li>Nº da Turma (Ano de formado, a primeira turma cadastrada foi 1951);</li>
        <li>Curso (Infantaria, Cavalaria, Artilharia, Engenharia, Comunicações, Material Bélico e Intendência) / Estágio(Oficial Técnico Temporário, Oficial Médico Temporário e Oficial Dentista Temporário);</li>
        <li>Nome completo;</li>
        <li>Encontrado (os militares faziam buscas na internet para verificar a existência de Informações sobre o Oficial R/2);</li>
        <li>Relevância (eram classificados por estrelas para facilitar nos filtros de buscas posteriormente);</li>
        <li>Profissão;</li>
        <li>Telefone;</li>
        <li>Observações (campo reservado para informações relevantes).</li>
    </ul>
</div>