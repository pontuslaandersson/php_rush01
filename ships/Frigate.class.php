<?PHP
include_once("Escort.class.php");
include_once("../weapons/NautLazer.class.php");

	class Frigate extends Escort
	{
		use NautLazer;

		private $_name = "Vengeance Of Kukkula";
		private $_player;
		private $_size_x = 1;
		private $_size_y = 4;
		private $_hull = 5;
		private $_shield = 0;
		private $_speed = 12;
		private $_wiggle = 4;
		private $_weapons = array();
		private $_PP = 10;

		public function __construct()
		{
			Parent::__construct($this->_name, $this->_player, $this->_size_x, $this->_size_y,
			$this->_hull, $this->_shield, $this->_speed, $this->_wiggle);
			echo $this->_name . "\n";
		}

		public function getWeapons($id)
		{
			$idWeapon = $this->getId();
			Parent::getWeapons($idWeapon);
			echo "The Vengeance of Kukkula acquired a Nautical Lazer\n\n\n";
		}

		public function shoot()
		{
			$this->shooting($this->_size_x);
		}
	}
?>
