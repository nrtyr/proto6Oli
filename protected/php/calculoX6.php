<?php 




// inicia consulta dos

    $consultaPadron2 = $db -> query("SELECT * FROM lineasMz WHERE cCatastral = '$deCriptClvCat2'; ");

    while ($resPadron2 = $consultaPadron2->fetchArray()) {

    
    $zNEstC2 = $resPadron2['zN'];
    $pSEstC2 = $resPadron2['pS'];
    $cCatastralEstC2 = $resPadron2['cCatastral'];
    $propietarioEstC2 = $resPadron2['propietario'];
    $domiciloEstC2 = $resPadron2['domicilo'];
    $idColEstC2 = $resPadron2['idCol'];
    $coloniaEstC2 = $resPadron2['colonia'];
    $mtsTerrEstC2 = $resPadron2['mtsTerr'];
    $mtsConstEstC2 = $resPadron2['mtsConst'];
    $usoEstC2 = $resPadron2['uso'];
    $valorTerrEstC2 = $resPadron2['valorTerr'];
    $valorConsEstC2 = $resPadron2['valorCons'];
    $meritosEstC2 = $resPadron2['meritos'];
    $demeritosEstC2 = $resPadron2['demeritos'];
    $valorCatEstC2 = $resPadron2['valorCat'];
    $periodoEstC2 = $resPadron2['periodo'];
    $impM1EstC2 = $resPadron2['impM1'];
    $descM1EstC2 = $resPadron2['descM1'];
    $totM1EstC2 = $resPadron2['totM1'];
    $impM2EstC2 = $resPadron2['impM2'];
    $recM2EstC2 = $resPadron2['recM2'];
    $totM2EstC2 = $resPadron2['totM2'];
    $lineaM1EstC2 = $resPadron2['lineaM1'];
    $lineaM2EstC2 = $resPadron2['lineaM2'];
    $bimestreEstC2 = $resPadron2['bimestre'];
    }
// termina consulta dos


 ?>