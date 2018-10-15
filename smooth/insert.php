<?php
   $dbco<?php
   $dbconn = pg_connect("ec2-107-22-189-136.compute-1.amazonaws.com port=5432 dbname=d2mamt76u2bal0 user=iutestvgwourup password=489953c5ad03edbb10481c4092319be6eb57668fa54a2352b76c34ca9f312c88");
   if(!$dbconn) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

$query = "INSERT INTO siteusers (email, password, name, state, address, zipcode, city) VALUES ('$_POST[email]','$_POST[password]', '$_POST[name]','$_POST[State]', '$_POST[address]', '$_POST[zip]', '$_POST[city]')";
//pg_query($db, $query);

if (pg_query($dbconn,$query))  {
        echo "user created successfully. ";
    }
    else  {
        echo "Error creating user. ";
    }
    echo $query;
?>