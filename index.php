<!DOCTYPE html>
<html lang="fi">

<head>
<link rel="stylesheet" href="styles/layout.css">
<meta charset="UTF-8">
</head>
<body>

<div class="topnav">
  <?php include 'menu.php';?>  
</div>

<?php include 'header.php';?>  

<div class="row">
  <div class="index_leftcolumn">
    <div class="card">
      <h2>Tule mukaan tanssin maailmaan!</h2>
      <p>Nuoret ja aikuiset, on aika kokea elämää täysillä ja tutustua uusiin kokemuksiin. Tanssi tarjoaa loistavan tavan ilmaista itseäsi ja kokea iloa liikkeestä. Helsinki - Espoo - Vantaa alueella voit kokea monipuolisia tanssityylejä, jotka sopivat juuri sinulle. Tässä on muutamia syitä, miksi sinun kannattaa harkita tanssin aloittamista:</p>

    </div>

    <div class="card">
      <h2>Rock & Swing -tanssit</h2>
      <div class="fakeimg" style="height:70px;">

         <img src="img/swing.jpeg" alt="Rock & Swing" style="width:55px;height:auto; float:left;margin-right: 5px;text-align:center;">
         <p>Bugg Boogie woogie Lindy hop</p>
      </div>
      <p>Rock- ja Swing-tanssit ovat täynnä energiaa ja elämäniloa! Nämä tanssityylit saavat sinut liikkumaan musiikin tahdissa ja tarjoavat mahdollisuuden oppia huikeita liikkeitä ja käännöksiä. Se on täydellinen tapa päästä irti arjesta ja nauttia musiikista ystävien kanssa.</p>
    </div>

    <div class="card">
      <h2>Latino</h2>
      <div class="fakeimg" style="height:70px;">
         <img src="img/latino.jpeg" alt="Latino" style="width:60px;height:auto; float:left;margin-right: 5px;text-align:center;">
         <p>Bachata Salsa</p> 
      </div>
   
      <p>Latino-tanssit ovat intohimoisia ja sensuelleja tansseja, jotka vievät sinut suoraan aurinkoiseen etelään. Bachata, salsa ja kizomba ovat täynnä tunteita ja rytmiä. Näissä tansseissa voit tuntea musiikin syvällä tavalla ja nauttia liikkeen ja kumppanin läheisyyden yhdistelmästä.</p>
    </div>

    <div class="card">
      <h2>Lavatanssit</h2>
      <div class="fakeimg" style="height:70px;">
         <img src="img/tango.jpeg" alt="Lavatanssit" style="width:60px;height:auto; float:left;margin-right: 5px;text-align:center;">
         <p>Valssi Tango Polkka</p> 
      </div>
      <p>Lavatanssit ovat perinteisiä suomalaisia tansseja, jotka ovat täynnä nostalgiaa ja yhteisöllisyyttä. Ne antavat mahdollisuuden tanssia perinteisten sävelten tahtiin ja kokea suomalaisen tanssikulttuurin kauneus. Lavatanssit ovat paikka, jossa voit nauttia varsinkin kesäsisin kauniista maisemista, rennosta tunnelmasta ja tehdä uusia ystäviä.</p>
    </div>

  </div>


  <div class="index_rightcolumn">
    <div class="card">
      <?php $paivamaara = date("d.m.Y");
      echo "<h3>Tänään " . $paivamaara ." tapahtuu</h3>";
      require_once 'tanaan_tapahtu_SQL.php';
      ?>
      <div> </div>
    </div>
  </div>
</div>

<div class="footer">
<?php include 'footer.php';?>  
</div>

</body>
</html>
