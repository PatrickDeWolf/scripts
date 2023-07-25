<?php
function asl($birthday,$gender)
{
	
		$icon="";
		if($gender=="m"){$icon="<i class='fa fa-mars' style='font-size:30px'></i>";}
		if($gender=="v"){$icon="<i class='fa fa-venus' style='font-size:30px'></i>";}
		if($gender=="x"){$icon="<i class='fa fa-intersex' style='font-size:30px'></i>";}
	$birthday=str_replace("/","-",$birthday);
	list($year,$month,$day) = explode("-",$birthday);
	$maand=$month;
	if(strlen($day)==4){
		$jaar=$day;
		$dag=$year;
		}else{
			$dag=$day;
			$jaar=$year;
		}
	$age=floor(((date("Y")-$jaar)*512+(date("m")-$maand)*32+date("d")-$dag)/512);
	return $icon." ".$age."j.";
}
?>
