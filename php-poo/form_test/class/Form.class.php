<?php
class Form{

	public function input($type, $name){
		echo "<input type=\"$type\" name=\"$name\" id=\"$name\" placeholder=\"$name\">";
	}

	public function label($for, $name){
		echo "<label for=\"$for\">$name : </label>";
	}

	public function controle(array $tab){
		echo "<pre>";
			print_r($tab);
		echo "</pre>";

		foreach ($tab as $key => $value) {
			echo ' key : ' . $key . ' <br>Value : ' . htmlentities($value) .'<br>';
		}
	}

	public function submit(){
		echo "<input type=\"submit\" value=\"envoyer\">";
	}
}