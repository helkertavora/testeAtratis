<?php 
class General{

	
	public function msgAlerta($tipo, $msg, $negrito) {
		$html= "
		<div class=\"alert alert-$tipo alert-dismissable\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
			<strong>$negrito</strong> $msg
		</div>";
		return $html;
	}
	
	public function pre($data) {
		print '<pre>' . print_r($data, true) . '</pre>';
	}

}