<?PHP
	#require ("page.inc");
	function __autoload($name){
		include_once $name.".inc";
	}
	$homepage = new Page();
	$homepage->content = "<p>Welcome to the home TLA Consulting.
							 Please take some time to get to kown us.</p>
						  <p>We specialine in serving your business needs 
						     and hope to hear form you soon.</p>";
	$homepage->Display();
?>