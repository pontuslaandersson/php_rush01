<?PHP
include_once("Battleship.class.php");
include_once("../weapons/LazerCanon.class.php");

	class Ork extends Battleship
	{
		use LazerCanon;

		private $_name = "You Basez Go Boom!";
		private $_player;
		private $_size_x = 2;
		private $_size_y = 7;
		private $_hull = 10;
		private $_shield = 2;
		private $_speed = 10;
		private $_wiggle = 2;
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
			echo "You Bazes Go Boom because our Lazer Canons W.W\n\n\n";
		}

		public function shoot()
		{
			$this->shooting($this->_size_x);
		}
	}
?>
