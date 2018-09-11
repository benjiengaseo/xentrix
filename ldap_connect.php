<?php //LDAP CONNECT.php
 
// using ldap bind
$ldaprdn = 'name'; // ldap rdn or dn
$ldappass = 'pass'; // associated password
 
// connect to ldap server
$ldapconn = ldap_connect("ldap.server.edu")
or die("Could not connect to LDAP server.");
 
if ($ldapconn) 
{
	// binding to ldap server
	$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
 
	// verify binding
	if ($ldapbind) 
	{
		echo "LDAP bind successful...";
	} else {
		echo "LDAP bind failed...";
	}
}
 
?>
