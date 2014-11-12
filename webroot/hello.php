<?php
/**
*This is a Zeus pagecontroller
*
*/
//include the essential config-file which also creates the $zeus variable with its defaults.
include(__DIR__.'/config.php');


//Do it and store it all in variables in the zeus container.
$zeus['title'] = "Hello world";

$zeus['header'] = <<<EOD
<img class='sitelogo' src='img/zeus.png' alt='zeus Logo'/>
<span class='sitetitle'>zeus webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$zeus['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Zeus ser ut och fungerar.</p>
EOD;



//Finally, leave it all to the rendering phase of Zeus
include(ZEUS_THEME_PATH);