<?php
$_GET['result'] = isset($_GET['result']) ? $_GET['result'] : '0';
$_GET['step'] = isset($_GET['step']) ? $_GET['step'] : 'home';


if ($_GET['step'] === 'final') $rate = calculRate($_GET['result']);

$file = 'view' . $_GET['step'];             // $file va me permettre d'appeler la vue souhaitée
include('view/default.php');

// En nommant nos fichiers de vues astucieusement la ligne 8 nous évites d'écrire les 15 lignes ci-dessus
// rendant le code plus court, plus lisible, plus performant, plus facilement testable et maintenable.
// Et en plus c'est intelectuellement plus élégant :-D
// if ($_GET['step'] === 'home') {
//     $file = 'viewhome';
// } elseif ($_GET['step'] === '1') {
//     $file = 'view1';
// } elseif ($_GET['step'] === '2') {
//     $file = 'view2';
// } elseif ($_GET['step'] === '3') {
//     $file = 'view3';
// } elseif ($_GET['step'] === '4') {
//     $file = 'view4';
// } elseif ($_GET['step'] === '5') {
//     $file = 'view5';
// } else {
//     $file = 'viewfinal';
// }


function calculRate(string $score): string
{
    if ($score === '-1') $score = '0';

    $score = round($score / 7 * 5);

    $rate = '';
    for ($i = 1; $i <= $score; $i++) {
        $rate .= '⭐';
    }
    for ($i = $score + 1; $i <= 5; $i++) {
        $rate .= '⚫';
    }

    return $rate;
}
