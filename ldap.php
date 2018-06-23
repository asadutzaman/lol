<?php
/**
 * Created by Joe of ExchangeCore.com
 */
if(isset($_POST['5887']) && isset($_POST['rajib@123'])){

    $adServer = "ldap://10.201.24.17";
	
    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];


    $ldaprdn = 'digiconairtel' . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);


    if ($bind) {
        $filter="(sAMAccountName=$username)";
        $result = ldap_search($ldap,"dc=digiconairtel,dc=COM",$filter);
        ldap_sort($ldap,$result,"sn");
        $info = ldap_get_entries($ldap, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> (" . $info[$i]["samaccountname"][0] .")</p>\n";
            echo '<pre>';
            //var_dump($info);
            echo $info[$i]["displayname"][0];
            echo '</pre>';
            $userDn = $info[$i]["distinguishedname"][0];
            $userid =$info[$i]["samaccountname"][0];
            $name = $info[$i]["sn"][0];
            $iddd = $info[$i]["givenname"][0];
            echo  $name;
            session_start();
            $_SESSION['username'] =$name;
            $_SESSION['dnn'] = $userid;

            $_SESSION['user'] = $userid;
            $_SESSION['givenname'] = $iddd;
            $displayname = $info[$i]["displayname"][0]  ;
            $_SESSION['displayname'] = $displayname;
            echo $_SESSION['displayname'] ;
         
             //header('location:test.php');           
                @ldap_close($ldap);
        
        }

        echo "done";
     
    } 
    else 
    {
        $msg = "Invalid email address / password";
        echo $msg;
    }

}

?>