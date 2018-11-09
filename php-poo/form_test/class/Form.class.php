<?php
class Form{

	public function input($type, $name){
		echo "<input type=\"$type\" name=\"$name\" id=\"$name\" placeholder=\"$name\">";
	}

	public function label($for, $name){
		echo "<label for=\"$for\">$name : </label>";
	}

	public function submit(){
		echo "<input type=\"submit\" value=\"envoyer\">";
	}
}