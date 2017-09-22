<?php 

// inicia consulta tres

    $consultaPadron3 = $db -> query("SELECT * FROM lineasMz WHERE cCatastral = '$deCriptClvCat3'; ");

    while ($resPadron3 = $consultaPadron3->fetchArray()) {

    
    $zNEstC3 = $resPadron3['zN'];
    $pSEstC3 = $resPadron3['pS'];
    $cCatastralEstC3 = $resPadron3['cCatastral'];
    $propietarioEstC3 = $resPadron3['propietario'];
    $domiciloEstC3 = $resPadron3['domicilo'];
    $idColEstC3 = $resPadron3['idCol'];
    $coloniaEstC3 = $resPadron3['colonia'];
    $mtsTerrEstC3 = $resPadron3['mtsTerr'];
    $mtsConstEstC3 = $resPadron3['mtsConst'];
    $usoEstC3 = $resPadron3['uso'];
    $valorTerrEstC3 = $resPadron3['valorTerr'];
    $valorConsEstC3 = $resPadron3['valorCons'];
    $meritosEstC3 = $resPadron3['meritos'];
    $demeritosEstC3 = $resPadron3['demeritos'];
    $valorCatEstC3 = $resPadron3['valorCat'];
    $periodoEstC3 = $resPadron3['periodo'];
    $impM1EstC3 = $resPadron3['impM1'];
    $descM1EstC3 = $resPadron3['descM1'];
    $totM1EstC3 = $resPadron3['totM1'];
    $impM2EstC3 = $resPadron3['impM2'];
    $recM2EstC3 = $resPadron3['recM2'];
    $totM2EstC3 = $resPadron3['totM2'];
    $lineaM1EstC3 = $resPadron3['lineaM1'];
    $lineaM2EstC3 = $resPadron3['lineaM2'];
    $bimestreEstC3 = $resPadron3['bimestre'];
    }

// termina consulta tres
 ?>