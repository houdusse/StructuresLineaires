<?php
use Algo\StructureDonnees\StructureLineaire\Pile;
use Algo\StructureDonnees\StructureLineaire\File;
use Algo\StructureDonnees\StructureLineaire\Liste;

// Mise en place autoloader
require 'autoloader.class.php';
Algo\StructureDonnees\StructureLineaire\MountLoader::defLoader();


echo '*********Pile************<br>';
$maPile = new Pile();
$maPile->empiler(30);
$maPile->empiler(20);
$maPile->empiler(10);
echo $maPile->depiler() .'<br>';
echo $maPile->depiler() .'<br>';
echo $maPile->depiler() .'<br>';

echo '**********File*********<br>';
$maFile = new file();
$maFile->enfiler(30);
$maFile->enfiler(20);
$maFile->enfiler(10 );
echo $maFile->defiler() .'<br>';
echo $maFile->defiler() .'<br>';
echo $maFile->defiler() .'<br>';

echo '*********Liste Tete*********<br>';
$maList = new Liste();
$maList->ajoutTete(10);
$maList->ajoutTete(20);
$maList->ajoutTete(30);
echo $maList->supprimeTete() .'<br>';
echo $maList->supprimeTete() .'<br>';
echo $maList->supprimeTete() .'<br>';




?>