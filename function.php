<?php
function IsNullOrEmptyString($str){
    return (!isset($str) || trim($str) === '');
}
function clear($tr2)
 {

	 return str_replace("'","",trim(strip_tags($tr2)));
 }
 ?>
