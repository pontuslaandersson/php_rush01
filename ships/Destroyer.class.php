<?PHP
include_once("Escort.class.php");

	class Destroyer extends Escort
	{
		private $_name = "Kroolgit";
		private $_player;
		private $_size_x = 2;
		private $_size_y = 3;
		private $_hull = 5;
		private $_shield = 0;
		private $_speed = 10;
		private $_wiggle = 2;
		private $_weapons = array();
		private $_charge = 0;
		private $_PP = 10;

		public function __construct()
		{
			Parent::__construct($this->_name, $this->_player, $this->_size_x, $this->_size_y,
			$this->_hull, $this->_shield, $this->_speed, $this->_wiggle, $this->_charge, $this->_PP);
		}
	}

?>
