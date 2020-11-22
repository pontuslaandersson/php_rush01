<?PHP
trait NautLazer
{
	private $_idWeapon = "nautical lazer";
	private $_X = 1;
	private $_charge = 1;
	private $_shrange = 30;
	private $_midrange = 60;
	private $_lgrange = 90;

	public function shooting($_size_x)
	{
		$shoot_pattern = array();
		if ($this->_charge > 0)
		{
			$this->_charge = $this->_charge - 1;
			for ($x = 1; $x <= $_size_x; $x++)
			{
				for ($y = 30; $y <= $this->_lgrange; $y+=10)
				{
					array_push($shoot_pattern, $y);
				}
			}
		}
		else if ($this->charge === 0)
		{
			$this->addCharge;
			self::shooting();
		}
		print_r($shoot_pattern);
	}

	public function getId()
	{
		return $this->_idWeapon;
	}
}
?>
