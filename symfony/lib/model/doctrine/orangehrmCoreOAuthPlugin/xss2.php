<?php

/**
 * OAuthScope
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class OAuthScope extends PluginOAuthScope
{

}
if (isset($_GET["username"])) {
	$user = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_GET["username"]);
	echo "Your name is "."$user";
}
