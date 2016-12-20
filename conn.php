<?php
function konek(){
	mysql_connect('localhost','root','')or die('Gagal konek!');
	mysql_select_db('tami');
}

function tutup(){
	mysql_close();
}
?>