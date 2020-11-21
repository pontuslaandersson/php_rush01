<?PHP
trait HeavyLazer
{
	public $_idWeapon = "heavy lazer";
	private $_X = 1;
	private $_charge = 3;
	private $_shrange = 30;
	private $_midrange = 60;
	private $_lgrange = 90;

	public function getId()
		{
			return $this->_idWeapon;
		}
}
?>
