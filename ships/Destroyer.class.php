<?PHP
include("Escort.class.php");
include("../weapons/HeavyLazer.class.php");

	class Destroyer extends Escort
	{
		use HeavyLazer;

		private $_name = "Kroolgit";
		private $_player;
		private $_size_x = 2;
		private $_size_y = 3;
		private $_hull = 5;
		private $_shield = 0;
		private $_speed = 10;
		private $_wiggle = 2;
		private $_weapons = array();
		private $_PP = 10;

		public function __construct()
		{
			Parent::__construct($this->_name, $this->_size_x, $this->_size_y,
			$this->_hull, $this->_shield, $this->_speed, $this->_wiggle);
			echo $this->_name . "\n";
		}

		public function getWeapons($id)
		{
			$idWeapon = $this->getId();
			Parent::getWeapons($idWeapon);
			echo "Krooglit gotz a Heavy Lazer\n\n\n";
		}

		public function shoot()
		{
			$this->shooting($this->_size_x);
		}
	}
?>
