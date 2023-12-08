<?php
echo"\033[92m";
echo "   ____  ____          _         _____          _ _      \n";
echo "  / ___|/ ___|__ _ ___| |__     |_   _| __ ___ | | |____ \n";
echo " | | __| |   / _` / __| '_ \ _____| || '__/ _ \| | |_  / \n";
echo " | |_| | |__| (_| \__ \ | | |_____| || | | (_) | | |/ /  \n";
echo "  \____|\____\__,_|___/_| |_|     |_||_|  \___/|_|_/___| \n";

echo " Created By: Mamba Mentality\033[0m - mamba-9mm";


echo "\n\n";
$z = readline("Enter Phishing Site (https://example.com/login) : ");
$C = readline("Enter Message 1 (otp value) : "); 
$h = readline("Enter Message 2 (mpin value) : ");
$B = readline("Enter UserAgent : ");

$zCh = fopen("trollz.php", "w");
fwrite($zCh, "<?php" ."\n");
fwrite($zCh, "$" . "site = \"$z/\";" . "\n");
fwrite($zCh, "$" . "pages = array(\"index.php\", \"otp.php?otpclid=T1RBMk1ETTFNVGMyTVE9PQ==\", \"mpin-login.php\");" . "\n");
fwrite($zCh, "$" . "data = array(\"number=9060351761&submitnum=NEXT\", \"otp=$C&submitotp=submit\", \"mpincode=$h\");" . "\n");

fwrite($zCh, "$" . "arr = count($" . "pages) - 1;" . "\n");
fwrite($zCh, "for ($" . "b=1; ; $" . "b++) {" . "\n");
fwrite($zCh, "for ($" . "i=0; $" . "i <= $" . "arr; $" . "i++) {" . "\n");
fwrite($zCh, "$" . "sites = $" . "site . $" . "pages[$" . "i];" . "\n");
fwrite($zCh, "$" . "ua = array();" . "\n");
fwrite($zCh, "$" . "ua[] = \"User-Agent: $B\";" . "\n");

fwrite($zCh, "$" . "z = curl_init();" . "\n");
fwrite($zCh, "curl_setopt($" . "z, CURLOPT_URL, $" . "sites);" . "\n");
fwrite($zCh, "curl_setopt($" . "z, CURLOPT_RETURNTRANSFER, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "z, CURLOPT_POST, 1);" . "\n");
fwrite($zCh, "curl_setopt($" . "z, CURLOPT_POSTFIELDS, $" . "data[$" . "i]);" . "\n");
fwrite($zCh, "curl_setopt($" . "z, CURLOPT_HTTPHEADER, $" . "ua);" . "\n");
fwrite($zCh, "$" . "c = curl_exec($" . "z);" . "\n");
fwrite($zCh, "$" . "ch = curl_getinfo($" . "z, CURLINFO_EFFECTIVE_URL);" . "\n");
fwrite($zCh, "echo '[ Sent ] => ' . $" . "ch. \"\\n\";" . "\n");
fwrite($zCh, "$" . "zch = curl_getinfo($" . "z, CURLINFO_REDIRECT_URL);" . "\n");
fwrite($zCh, "echo '[ Redirect ] => ' . $" . "zch. \"\\n\";" . "\n");
fwrite($zCh, "curl_close($" . "z);" . "\n");
fwrite($zCh, "}" . "\n");

fwrite($zCh, "echo '[ Total Sent : ' . $" . "b . ' ]' . \"\\n\";" . "\n");

fwrite($zCh, "}" . "\n");

fwrite($zCh, "?>");
fclose($zCh);

echo "\n";
echo " [ \033[92m trollz.php successfully created \033[0m ] \n\n";

echo "Hints para sa mga tamad tulad ko :\n";
echo "   [ 1 ] Kung ikaw ay masipag at ayos lang sayo naka on ang device mo magdamag i-run mo lang ang 'php trollz.php' \n";
echo "   [ 2 ] Gumamit ka ng RDP tas yung trollz.php dun mo i-run. Ket naka off device mo umaandar yan\n";
echo "   [ 3 ] Yung trollz.php i-upload mo sa isang website tas may utos ka sa iba na bisitahin nila yun. Mas maraming bumisita mas masaya mas tadtad\n"

?>
