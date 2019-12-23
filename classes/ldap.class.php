<?php 

class LDAP{

    public  $ldapserver = "161.246.34.181";
    public  $ldapport = "389";
    public  $basedn = "dc=kmitl,dc=ac,dc=th";
    public  $basepass = "yourldap_password"; 

	function connect($server,$port){

		echo "Connecting to LDAP Server..."; 
		$connection = ldap_connect($server,$port);  // must be a valid LDAP server!	
		ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);

		// PHP Reference says there is no control of connection status in OpenLDAP 2.x.x
		// So we'll use binding function to check connection status.

		return $connection;

	}

	function bind($connection,$basedn,$basepass){

		echo "<br><br>Binding...<br>";  
		$ldaprdn  = $basedn;    // ldap rdn or dn 
		$ldappass = $basepass;  // associated password
		$bind = ldap_bind($connection, $ldaprdn, $ldappass);

		if ($bind) { 
			echo "LDAP bind successful...";

		} else { 
			echo "LDAP bind failed..."; 
		}
	}


	function close($connection){
		echo '<hr><br>';
	    echo "Closing connection";
	    ldap_close($connection);
	}

}

?>