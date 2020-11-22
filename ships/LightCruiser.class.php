<?PHP
include_once("Cruiser.class.php");
include_once("../weapons/SideLazer.class.php");

	class Light extends Cruiser
	{
		use SideLazer;

		private $_name = "Smol Boi";
		private $_player;
		private $_size_x = 1;
		private $_size_y = 5;
		private $_hull = 5;
		private $_shield = 1;
		private $_speed = 18;
		private $_wiggle = 6;
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
			echo "This Smol Boi has them side lazers\n\n\n";
		}

		public function shoot()
		{
			$this->shooting($this->_size_x);
		}
	}

?>
