<?php 

header("Content-Type: text/html; Charset=UTF-8");
error_reporting(E_ALL ^ E_DEPRECATED);

session_start();

if (isset($_SESSION['pass']) && !empty($_SESSION['pass'])) {


    $zNEstC = "";
    $pSEstC = "";
    $cCatastralEstC = "";
    $propietarioEstC = "";
    $domiciloEstC = "";
    $idColEstC = "";
    $coloniaEstC = "";
    $mtsTerrEstC = "";
    $mtsConstEstC = "";
    $usoEstC = "";
    $valorTerrEstC = "";
    $valorConsEstC = "";
    $meritosEstC = "";
    $demeritosEstC = "";
    $valorCatEstC = "";
    $periodoEstC = "";
    $impM1EstC = "";
    $descM1EstC = "";
    $totM1EstC = "";
    $impM2EstC = "";
    $recM2EstC = "";
    $totM2EstC = "";
    $lineaM1EstC = "";
    $lineaM2EstC = "";
    $bimestreEstC = "";
    $mesUno = "1";
    $mesDos = "1";
    $ano = "1";
    $fechaMesUno = "1";
    $fechaMesDos = "1";



$deCriptClvCat = base64_decode($_SESSION['clvCat']);
$deCriptClvCat2 = base64_decode($_SESSION['clvCat2']);
$deCriptClvCat3 = base64_decode($_SESSION['clvCat3']);

$db = new SQLite3('../data/tiempo.db');

$contador = $db -> query("SELECT COUNT(cCatastral) AS Cuantos1 FROM lineasMz WHERE cCatastral = '$deCriptClvCat'; ");
$resContador = $contador->fetchArray();
$cCatastralEstC = $resContador['Cuantos1'];

    // if ($cCatastralEstC == "0") {



//         echo '

// <html>
//     <head>
//         <meta http-equiv="REFRESH" content="0; url=../error/mensaje.aspx">
//     </head>
//     <style>
//             body{
//                 display: none;
//             }
//         </style>
// </html>


//         ';
//     }else{

// ############################################
// Comprobación, si la tiene más de una clave
// ############################################

$contador2 = $db -> query("SELECT COUNT(cCatastral) AS Cuantos2 FROM lineasMz WHERE cCatastral = '$deCriptClvCat2'; ");
$resContador2 = $contador2->fetchArray();
$cCatastralEstC2 = $resContador2['Cuantos2'];


$contador3 = $db -> query("SELECT COUNT(cCatastral) AS Cuantos3 FROM lineasMz WHERE cCatastral = '$deCriptClvCat3'; ");
$resContador3 = $contador3->fetchArray();
$cCatastralEstC3 = $resContador3['Cuantos3'];

$posible = $cCatastralEstC.$cCatastralEstC2.$cCatastralEstC3;

$imprimeX = "";

switch ($posible) {
    case "111":
        include("calculoX1.php");
        $imprimeX = "estadoCUno.php";
        break;
    case "110":
        include("calculoX2.php");
        $imprimeX = "estadoCDos.php";
        break;
    case "101":
        include("calculoX3.php");
        $imprimeX = "estadoCTres.php";
        break;
    case "100":
        include("calculoX4.php");
        $imprimeX = "estadoCCuatro.php";
        break;
    case "011":
        include("calculoX5.php");
        $imprimeX = "estadoCCinco.php";
        break;
    case "010":
        include("calculoX6.php");
        $imprimeX = "estadoCSeis.php";
        break;
    case "001":
        include("calculoX7.php");
        $imprimeX = "estadoCSiete.php";
        break;
    case "000":
        echo '

            <html>
                <head>
                    <meta http-equiv="REFRESH" content="0; url=../error/mensaje.aspx">
                </head>
                <style>
                        body{
                            display: none;
                        }
                    </style>
            </html>


        ';
        $imprimeX = "";
        break;
}

// }

// ############################################
// Comprobación, si la tiene más de una clave
// ############################################


$db->close();


switch ($bimestreEstC) {
    case "1":
        $mesUno = 1;
        $mesDos = 2;
        $fechaMesUno = "ENE";
        $fechaMesDos = "FEB";
        break;
    case "2":
        $mesUno = 3;
        $mesDos = 4;
        $fechaMesUno = "MAR";
        $fechaMesDos = "ABR";
        break;
    case "3":
        $mesUno = 5;
        $mesDos = 6;
        $fechaMesUno = "MAY";
        $fechaMesDos = "JUN";
        break;
    case "4":
        $mesUno = 7;
        $mesDos = 8;
        $fechaMesUno = "JUL";
        $fechaMesDos = "AGO";
        break;
    case "5":
        $mesUno = 9;
        $mesDos = 10;
        $fechaMesUno = "SEP";
        $fechaMesDos = "OCT";
        break;
    case "6":
        $mesUno = 11;
        $mesDos = 12;
        $fechaMesUno = "NOV";
        $fechaMesDos = "DIC";
        break;

}

$ano = (int)substr($periodoEstC,0,4);
$uDiaMesUno = date("d",(mktime(0,0,0,$mesUno+1,1,$ano)-1));
$uDiaMesDos = date("d",(mktime(0,0,0,$mesDos+1,1,$ano)-1));

if ((int)$bimestreEstC > 4) {
    $xCero = "/";
}else{
    $xCero = "/0";
}

$fechaCorte = $uDiaMesDos."".$xCero."".$mesDos."/".$ano;
$fechaVenUno = $uDiaMesUno."/".$fechaMesUno."/".$ano;
$fechaVenDos = $uDiaMesDos."/".$fechaMesDos."/".$ano;




}else{

    echo "<script> alert('No puedes ver esta pagina!');</script>";
    echo "<script> window.location='index.php'; </script>";
    
}

include($imprimeX);

?>

