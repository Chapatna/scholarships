<?

    class LOGIN{
            public function login($data){

                $user = $data["username"];
                $password = $data["password"];
                $host = 'ldap://[ip adress]/[domain].nl';
                $domain = '[domain].nl';
                $basedn = 'dc=[domain],dc=nl';

                $ad = ldap_connect($host.$domain,389) or die('Could not connect to LDAP server.');

                ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);

            //$bind = ldap_bind($ad, "$user@$domain", $password) or die('Could not bind to AD.');

                if(@ldap_bind($ad, "$user"."@"."$domain", $password)){

                    $result = "Authenticated";

                }else{
                    $result = "Invalid Credential";
                }               

            return $result;
        }
    }
}

$login = new LOGIN; 