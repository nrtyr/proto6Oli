<?php 

// inicia consulta uno
    $consultaPadron = $db -> query("SELECT * FROM lineasMz WHERE cCatastral = '$deCriptClvCat'; ");

    while ($resPadron = $consultaPadron->fetchArray()) {

    
    $zNEstC = $resPadron['zN'];
    $pSEstC = $resPadron['pS'];
    $cCatastralEstC = $resPadron['cCatastral'];
    $propietarioEstC = $resPadron['propietario'];
    $domiciloEstC = $resPadron['domicilo'];
    $idColEstC = $resPadron['idCol'];
    $coloniaEstC = $resPadron['colonia'];
    $mtsTerrEstC = $resPadron['mtsTerr'];
    $mtsConstEstC = $resPadron['mtsConst'];
    $usoEstC = $resPadron['uso'];
    $valorTerrEstC = $resPadron['valorTerr'];
    $valorConsEstC = $resPadron['valorCons'];
    $meritosEstC = $resPadron['meritos'];
    $demeritosEstC = $resPadron['demeritos'];
    $valorCatEstC = $resPadron['valorCat'];
    $periodoEstC = $resPadron['periodo'];
    $impM1EstC = $resPadron['impM1'];
    $descM1EstC = $resPadron['descM1'];
    $totM1EstC = $resPadron['totM1'];
    $impM2EstC = $resPadron['impM2'];
    $recM2EstC = $resPadron['recM2'];
    $totM2EstC = $resPadron['totM2'];
    $lineaM1EstC = $resPadron['lineaM1'];
    $lineaM2EstC = $resPadron['lineaM2'];
    $bimestreEstC = $resPadron['bimestre'];
    }
// termina consulta uno



 ?>