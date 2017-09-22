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