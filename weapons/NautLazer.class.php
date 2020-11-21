<?PHP
trait NautLazer
{
	private $_idWeapon = "nautical lazer";
	private $_X = 1;
	private $_charge = 0;
	private $_shrange = 30;
	private $_midrange = 60;
	private $_lgrange = 90;

	public function getId()
	{
		return $this->_idWeapon;
	}
}
?>
