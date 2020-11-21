<?PHP
include_once("Destroyer.class.php");
include_once("Frigate.class.php");
include_once("LightCruiser.class.php");
include_once("HeavyCruiser.class.php");
include_once("ImperialBattle.class.php");
include_once("OrkBattle.class.php");
include_once("Escort.class.php");
include_once("Battleship.class.php");
include_once("Cruiser.class.php");
include_once("../weapons/HeavyLazer.class.php");

echo "We have made them ships, here's your fleet!\n\n";
$ship1 = new Destroyer;
$ship2 = new Frigate;
$ship3 = new Light;
$ship4 = new Heavy;
$ship5 = new Imperial;
$ship6 = new Ork;
echo "\n\n";
$ship1->getWeapons("");
$ship2->getWeapons("");
$ship3->getWeapons("");
$ship4->getWeapons("");
$ship5->getWeapons("");
$ship6->getWeapons("");
?>
