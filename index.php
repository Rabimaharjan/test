<?php
require 'users/user.php';
require 'users/developer.php';



$user = new User();
$user->name = 'Rabi Maharjan';
//$user->title = 'Mr';
$user->setTitle('mr');
$user->setDob('January 2 2018');

echo $user->getSalutation();
echo "<br />\n";
echo $user->getDob();
echo "<br />\n";

$james = new Developer();
$james->name = 'James Smith';
echo $james->getSalutation();
echo "<br />\n";

$james->setSkills(['Beard','Zend Framework','PHP']);
echo $james->getSkillsString();

$james->setSkills(['Java','Cpp']);
echo $james->getSkillsString();

$james->setTools('eat');
echo $james->showTools();

echo "git test";
echo " change";
?>