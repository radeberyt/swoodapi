<?php
////////////////////////////////////////
// Version 1 of StoneWood Project API //
////////////////////////////////////////
require __DIR__ . '/MinecraftPing.php';
require __DIR__ . '/MinecraftPingException.php';

///////////// CONFIG /////////////
$SERVER_URL = null; // Don't set it if you dont have a server url
$SERVER_IP 	= 'play.lastcraft.com';
$PORT 			= '25565';
try
{
		$Query = new MinecraftPing( $SERVER_IP, $PORT );

		$data = $Query->Query();
		$status = 'online';
}
catch( MinecraftPingException $e )
{
		echo $e->getMessage();
		$status = 'offline';
}
finally
{
		$Query->Close();
}

?>
