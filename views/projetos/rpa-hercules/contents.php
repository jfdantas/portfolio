<div class="abstract">
    <div class="ps-2 bloc">
        Desenvolvimento do programa, para capturar as informações provenientes da câmara de compensação da IATA - International Air Transport Association, necessárias para a realização da conferência do faturamento de bilhetes aéreos entre as Companhias Aéreas.
        <p class="p-1">
            As informações são disponibilizadas em arquivos nos formatos HTML e CSV, que, somados, variam entre aproximadamente 1 GB e 5 GB. O analista deve interpretar mais de 18 campos em arquivos diferentes para realizar suas atividades.
        </p>
        <p class="p-1">
            O programa gerado possibilitou que estas informações fossem extraídas destes arquivos e posteriormente trabalhadas em colunas, em uma planilha no Excel.</p>
        <p class="p-1">
            Antes da implementação do programa, a coleta dessas informações pelo analista para preparar as análises demorava cerca de 8 horas.
        </p>
        <p class='p-1'>
            Com o desenvolvimento essa etapa passou a ser entre 02 a 05 minutos.
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
                    <li>JavaScript</li>
                    <li>CSS</li>
                    <li>HTML</li>
                </ul>
            </li>
        </ul>
    </div>
</div>