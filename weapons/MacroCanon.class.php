<?PHP
trait MacroCanon
{
	private $_idWeapon = "macro canon";
	private $_X = 1;
	private $_charge = 0;
	private $_shrange = 10;
	private $_midrange = 20;
	private $_lgrange = 30;
	//this blast is diamond-shaped.
	
	public function getId()
	{
		return $this->_idWeapon;
	}
}
?>
