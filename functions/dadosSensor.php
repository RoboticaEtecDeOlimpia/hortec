<?php 
include_once('config.php');


$sensorAr = "SELECT * FROM tbl_sensores";

$resultado = mysqli_query($conn, $sensorAr);

$nomeSensorSolo = selecionarDados("sns_nome", "tbl_sensores", "sns_localizacao", "cantoDireito",$conn);;
//    echo "<br><br> Valor retornado do selecionarDados sensor do solo: ".$nomeSensorSolo;
$nomeSensorAr = selecionarDados("sns_nome", "tbl_sensores", "sns_localizacao","cantoEsquerdo",$conn);
//    echo "<br><br> Valor retornado do selecionarDados do sensor do ar: ".$nomeSensorAr;


$umidadeSolo = selecionarDados("lesolo_umidade", "tbl_leituraSolo", "sns_id", "",$conn);
//    echo "<br><br><br><br> Valor retornado do selecionarDados da umidadade do solo: ".$umidadeSolo;
$umidadeAr = selecionarDados("lear_umidade", "tbl_leituraAr", "sns_id", "",$conn);
//    echo "<br><br> Valor retornado do selecionarDados do umidadade do ar: ".$umidadeAr;  


$tempSolo = selecionarDados("lesolo_tempe", "tbl_leituraSolo", "sns_id", "",$conn);
//    echo "<br><br><br><br> Valor retornado do selecionarDados do temperatura do ar: ".$tempSolo;  
$tempAr = selecionarDados("lear_tempe", "tbl_leituraAr", "sns_id", "",$conn);
//    echo "<br><br> Valor retornado do selecionarDados do temperatura do ar: ".$tempAr; 


$ultLeituraSolo = selecionarDados("lesolo_datahora", "tbl_leituraSolo", "sns_id", "",$conn);;
// echo
$ultLeituraAr = selecionarDados("lear_datahora", "tbl_leituraAr", "sns_id", "",$conn);
// echo 


$volumeReservatorio = "18%";


// FUNÇÕES
function selecionarDados($nomeColuna ,$tabela, $colunaFtr, $ftrDeterminante, $conne){

        if($ftrDeterminante == null){
            if($tabela == "tbl_leituraSolo"){
                $ftrDeterminante = 1;
            }
            if($tabela == "tbl_leituraAr"){
                $ftrDeterminante = 2;
            }
        }

    $selectDados = "SELECT $nomeColuna FROM $tabela WHERE $colunaFtr = '$ftrDeterminante'";
    
    $executaBanco = mysqli_query($conne, $selectDados);
    $resultado = mysqli_fetch_assoc($executaBanco)[$nomeColuna];

    return $resultado;
}




?>