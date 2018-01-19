<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Mobile: Theme Download</title>
    <link rel="stylesheet" href="blauwgeel.min.css" />
    <link rel="stylesheet" href="jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="jquery.mobile.structure-1.4.5.min.css" />
    <script src="jquery-1.11.1.min.js"></script>
    <script src="jquery.mobile-1.4.5.min.js"></script>
</head>
    <div id="pag1" data-role="page">
        <div data-role="header" data-position="fixed" data-theme="b">
            <h1>BMI Berekenen</h1>
        </div>
        
        <div role="main" class="ui-content">
        <form action="BMI.php" method="get">
        </form><label for="Gewicht">Gewicht in kilogram:</label>
        
        <input name="Gewicht" id="gewicht" type="range" min="20" max="150" step="1" value="20">
        <label class="ui-hidden-accesible" for="bereken">Lengte:</label>
        <input name="Lengte" id="lengte" type="range" min="0" max="230" step="1" value="0">
        <button class="ui-shadow ui-btn ui-corner-all ui-mini" id="berekenen" type="submit" name="berekenen"> Bereken BMI</button>
                </form>


<?php //overgenomen van opdracht van vorig hoofdstuk
// Hier wordt het ingevulde gewicht en de lengte opgehaald en bewaard in de variabele $lengte en gewicht
if(isset($_GET["berekenen"])) { 
$lengte1= $_GET["lengte"];
$lengte = $lengte1 / 100; 
$gewicht= $_GET["gewicht"];
$BMI = $gewicht/($lengte*$lengte);
print "Uw BMI =$BMI";
print round($BMI, 1);
                                                       //Hier wordt de lengte omgezet van centimeters naar meters
                 //Hier de lengte in meters keer de lengte in meters gedaan
                 //Hier wordt de BMI afgerond op 1 decimaal en het gewicht door de lengte gedeeld

if($BMI < 18.5) {                                      //Wanneer de BMI lager is dan 18,5 wordt een statement geprint
  echo "Uw BMI = $BMI, ondergewicht";
}
elseif($BMI >= 18.5 && $BMI < 22.5) {                  //Wanneer de BMI tussen de 18,5 en de 22.5 ligt wordt een statement geprint
  echo "Uw BMI = $BMI, normaal gewicht";
}

elseif ($BMI > 25 && $BMI <= 27) {                     //Wanneer de BMI tussen de 25 en de 27 wordt een statement geprint
  echo"Uw BMI = $BMI, licht overgewicht";
}

elseif ($BMI > 27 && $BMI <= 30){                      //Wanneer de BMI tussen de 27 en de 30 wordt een statement geprint
  echo"Uw BMI = $BMI, matig overgewicht";

}

elseif ($BMI > 30 && $BMI <= 40) {                    //Wanneer de BMI tussen de 30 en de 40 wordt een statement geprint
  echo "Uw BMI = $BMI, ernstig overgewicht";
}

elseif ($BMI > 40) {                                  //Wanneer de BMI lager is dan 40 wordt een statement geprint
  echo "Uw BMI = $BMI, ziekelijk overgewicht";
}
}

?>