<?php
/********************************************************************************************************************
  Consider the following string(bbit3a.txt)                                                                         *
  It constains names(IP address,surname,second_name,first_name),number,country and country code of some individuals *
                                                                                                                    *
  @Required                                                                                                         *
  1. Create a new branch from the develop branch called feature-rewind-13a                                          *
  2. Display the following data as follows (NB: first_name can be clicked to open the persons IP on a new tab)      *
                                                                                                                    *
      a). first_name second_name,surname (# country_code(0)number[country])                                         *
      b). .......                                                                                                   *
      c). .......                                                                                                   *
      (For example                                                                                                  *
        a) Mosiro Olesaningo Chirchir(# +254 (0) 760 387 482[KENYA])                                                *
      )                                                                                                             *
                                                                                                                    *
    Summary                                                                                                         *
     -- Total names : total.                                                                                        *
     -- Total unique countries : total(list of countries - comma separated)                                         *
  3. Commit changes of the new branch                                                                               *
  4. Merge changes with the development branch                                                                      *
  5. Push the changes to your repo.                                                                                 *
  6. Submit the github url on google classroom (Check Quiz 1 - 3A)                                                  *
 ********************************************************************************************************************/

 $quiz ="66.249.72.240.Chirchir,Olesaningo Mosiro.0760387482.KENYA.+254_
 192.168.170.25.Wambua,Doe Mumbua.080023450.KENYA.+254_
 113.193.241.186.Vonbora,Katherina Luther.0600990033.GERMANY.+32_
 197.176.231.200.Boromir,Grommit Wallace.0100873901.IRELAND.+98_
 113.193.241.186.Faramir,Edwards Jonathan.0200983729.AMERICA.+1_
 77.77.7.7.Asaph,Aslan King.02990033.ISRAEL.+2_
 172.53.14.2.Huan,Valinor Hound.02880023.SPAIN.+26_
 113.193.241.18.Otoyo,Wafula Joel.0777799920.KENYA.+254_
 173.190.141.16.Mapete,Mwambingu Simba.0987483292.TANZANIA.+257_
 153.193.241.186.SARATON,DAVID BREINARD.043899292.AMERICA.+1_
 103.153.211.186.Legolas,JOHN OWEN.074749292.ZAMBIA.+267_
 123.19.201.186.Puddleglum,JOHN BUNYAN.09837328.UGANDA.+256_
 163.193.241.156.Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32_
 150.133.10.23.Beren,Luthien Lovi.028403323.SPAIN.+26";

 $new_quiz = str_replace("_\n ", "-", $quiz);
 // $newest_quiz = str_replace("_", "-", $new_quiz);

$split = explode('-', $new_quiz); //splitting the string using a separator in the string
if (isset($_GET["user_ip"])){

print '<h1>' . $_GET["user_ip"] . '</h1>';

?>
<a href = "bbit3a.php" >Reset</a>

<pre>
<?php
}else{
	foreach($split AS $value){
		$user_array = explode('.', $value);
		$user_ip = (array_slice($user_array, 0, 4));
		// $user_name = (array_slice($user_array, 0, 5));
		// $user_phone = (array_slice($user_array, 0, 6));
		// $user_country = (array_slice($user_array, 0, 7));
		// $user_country_code = (array_slice($user_array, 0, 8));

			$user_name = $user_array[4];
			$user_phone = $user_array[5];
			$user_country = $user_array[6];
			$user_country_code = $user_array[7];

		print '<a href = "bbit3a.php?user_ip=' . implode(".", $user_ip) . '" target = "_BLANK" onclick = "confirm(\'Dou you want to see IP: ' . implode(".", $user_ip) . '\');" title = "' . implode(".", $user_ip) . '">' . ($user_name) . '</a>';
		print ' (# ' . ($user_country_code) . ' '. ($user_phone) . ' ['. ($user_country). '])';
		print '<br />';
	}
 ?>
</pre>
<?php
}
?>
