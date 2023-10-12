<?php 

include_once("asetukset.php");

// echo " .... luo yhteys ... <br>";
// echo "<h2>Luodaan yhteys tunnuksilla: $db_server, $db_username, $db_password, $tietokanta</h2>";

$yhteys = mysqli_connect($db_server, $db_username, $db_password, $db_table);

if (!$yhteys) {
  $virheviesti = "Yhteys MySQL-tietokantaan epäonnistui: " . mysqli_connect_error();
  die($virheviesti);
}
  else {
    // echo " .... yhteyden muodostus - OK ... <br> <br>";
}


// ------ KYSELY 1 ------
$kyselysql = "SELECT * FROM tapahtuma
WHERE DATE(tapahtuma_alku_paiva) = CURDATE()
ORDER BY TIME(tapahtuma_alku_aika);";

// echo " <h4>.... suoritetaan kysely $kyselysql </h4><br>";
$tulos = mysqli_query($yhteys, $kyselysql);
if (!$tulos) {
  die("Taulukysely epäonnistui: <br>" . mysqli_error($yhteys));
}

if ($tulos) {
   
// $paivamaara = "2023-09-30"; Tietokannasta haettu päivämäärä

  // Muotoilu suomalaiseen muotoon päivä-kuukausi-vuosi
  // $suomalainen_paivamaara = strftime("%d.%m.%Y", strtotime($paivamaara));
  // echo $suomalainen_paivamaara; 
  
  echo "<table>";
  echo "<tr>
  <th>Tapahtuma</th>
  <th>Aika</th>
  <th>Paikka</th>
  </tr>";
  
  $rivit=0;
  // Hae ja tulosta tietueet
  while ($rivit = mysqli_fetch_assoc($tulos)) {
      echo "<tr>";
      // echo "<td>" . $rivit['tapahtuma_id'] . "</td>";

      echo "<td>" . $rivit['tapahtuma_nimi'] . "</td>";

      $pitka_aika =$rivit['tapahtuma_alku_aika'];
      // Käytä substr-funktiota lyhentämään aika muotoon hh:mm
      // Alkupiste, josta leikkaus alkaa (0 merkitsee ensimmäistä merkkiä).
      $lyhyt_aika = substr($pitka_aika, 0, 5);

      echo "<td>" . $lyhyt_aika . "</td>";

      echo "<td>" . $rivit['tapahtuma_paikka'] . "</td>";
      echo "</tr>";
  }
    echo "</table>";
} else { echo "Kysely epäonnistui: " . mysqli_error($yhteys);
  }

$yhteys->close();







// ------ KYSELY 2 ------
/*
$kyselysql = "SELECT teksti, luku FROM esim_taulu";
echo " <h2>.... suoritetaan kysely $kyselysql </h2><br>";
$tulos = mysqli_query($yhteys, $kyselysql);

//Tarkista kyselyn onnistuminen
if (!$tulos) {
   die("Kysely epäonnistui: <br>" . mysqli_error($yhteys));
}
*/

// Tulosta kyselyn tulos
/*
 echo "<h2>Taulu 'test' sisältö:</h2>";
 echo "<table>";
 echo "<tr>
    <th>teksti</th>
    <th>Luku</th>
  </tr>";

while ($rivi = mysqli_fetch_assoc($tulos)) {
     echo "<tr>";
     echo "<td>" . $rivi['teksti'] . "</td>";
    echo "<td>" . $rivi['luku'] . "</td>";
     echo "</tr>";
}
 echo "</table>";
*/
// ------ KYSELY 2 ------
?>