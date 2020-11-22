<?PHP
trait MacroCanon
{
	private $_idWeapon = "macro canon";
	private $_X = 1;
	private $_charge = 1;
	private $_shrange = 10;
	private $_midrange = 20;
	private $_lgrange = 30;
	//this blast is diamond-shaped.

	public function shooting($_size_x)
	{
		$shoot_pattern = array();
		if ($this->_charge > 0)
		{
			$this->_charge = $this->_charge - 1;
			for ($x = 1; $x <= $_size_x; $x++)
			{
				for ($y = 10; $y <= $this->_lgrange; $y+=4)
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
