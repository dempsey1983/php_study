<?PHP
class Page
{
	//Class Page's attributes
	public $content = "default: we are the champions";
	public $title = "TLA Consulting Pty Ltd";
	public $keywords = "TLA Consulting, Three Letter Abbreviation,
					some of my best friends are search engines";
	public $buttons = array("Home" 		=>	"home.php",	
							"Contact"	=>	"contact.php",
							"Services"	=>	"services.php",
							"Site MAP"	=>	"map.php"
							);
	//Class Page's operations
	public function __set($name, $value)
	{
		$this->$name = $value;
	}
	public function Display()
	{
		echo "<html>\n<head>\n";
		$this->DisplayTitle();
		$this->DisplayKeywords();
		$this->DisplayStytles();
		echo "</head>\n<body>\n";
		$this->DisplayHeader();
		$this->DisplayMenu($this->buttons);
		echo $this->content;
		//$this->DisplayContent();
		$this->DisplayFooter();
		echo "</body>\n</html>\n";
	}
	public function DisplayContent() {
		echo $this->content;
	}
	public function DisplayTitle() {
		echo "<title>".$this->title."</title>";
	}
	public function DisplayKeywords() {
		echo "<meta name=\"keywords\" content=\"".$this->keywords."\"/>";
	}
	public function DisplayStytles() {
	?>
		<style>
		h1 {
			color:red; font-size:24pt; text-align:center;
			font-family:arial, sans-serif
		}
		.menu {
			color:red; font-size:12pt; text-align:center;
			font-family:arial, sans-serif; font-weight:bold
		}
		td {
			background:blue
		}
		p {
			color:black; font-size:12pt; text-align:justify;
			font-family:arial, sans-serif
		}
		p.foot {
			color:red; font-size:9pt; text-align:center;
			font-family:arial, sans-serif; font-weight:bold
		}
		a:link,a:visited,a:active {
			color:red
		}
		</style>
	<?PHP
	}
	public function DisplayHeader() {
	?>
		<table width=100% cellpadding="12" cellspacing="0" border="0">
		<tr bgcolor="black">
			<td align="left"><img src="logo.gif" /></td>
			<td>
				<h1>TLA Consulting Pty Ltd</h1>
			</td>
			<td align="right"><img src="logo.gif" /></td>
		</tr>
		</table>
	<?PHP
	}
	public function DisplayMenu($buttons) {
		echo "<table width=\"100%\" bgcolor=\"red\" cellpadding=\"4\" cellspacing=\"4\">\n";
		echo "<tr>\n";
		//calculate button size
		$width = 100/count($buttons);
		
		while(list($name, $url) = each($buttons)) {
			$this->DisplayButton($width, $name, $url, $this->IsURLCurrentPage($url));
		}
		echo "</tr>\n";
		echo "</table>";
	}
	public function IsURLCurrentPage($url) {
		if(strpos($_SERVER['PHP_SELF'], $url) == false) 
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	public function DisplayButton($width, $name, $url, $active = true) {
		if($active) {
			echo "<td width=\"".$width."%\">
				      <a bref=\"".$url."\">
					  <img src=\"s-logo.gif\" alt=\"".$name."\"border=\"0\"/></a>
					  <a bref=\"".$url."\"><span class=\"menu\">".$name."</span></a>
					  </td>";
		} else {
			echo "<td width=\"".$width."%\">
					  <img src=\"side-logo.gif\">
					  <span class=\"menu\">".$name."</span>
				  </td>";
		}
	}
	public function DisplayFooter() {
	?>
		<table width="100%" bgcolor="black" cellpadding="12" border="0">
		<tr>
		<td>
			<p class="foot">&copy; TLA Consulting Pty Ltd.</p>
			<p class="foot">Please see our <a href = "">legal infomation page</a></P>
		</td>
		</tr>
		</table>
	<?PHP
	}
}
?>