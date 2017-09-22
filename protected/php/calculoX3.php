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