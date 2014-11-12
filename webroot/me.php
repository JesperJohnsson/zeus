<?php 
/**
 * This is a Zeus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $zeus variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Zeus container.
$zeus['title'] = "Om mig";

$zeus['main'] = <<<EOD

<article class="readable">
<h1>Om Mig</h1>

<p>Jag heter Jesper Johnsson och kommer ifrån en liten by ca 5mil utanför växjö, som heter Diö. Jag bor där med mina föräldrar och mina två småsyskon. Jag har fått tag i en lägenhet här i Karlskrona men jag får inte tillgång till den förrän den första oktober så det blir att köra ifrån diö varje dag jag ska till skolan.</p> 
<p>Jag gick teknik med inriktning information och medieteknik på gymnasiet så det blev lite programmering under de åren vilket gjorde att jag bestämde mig för att gå webbprogrammering här i Karlskrona.</p>
<p>Jag har spelat fotboll i stort sett hela mitt liv, det var för ca 2år sedan som jag bestämde mig för att sluta spela fotboll. Men båda mina småsyskon spelar fotboll så det blir ändå mycket fotboll. På fritiden så blir det mycket datorspelande, spelet just nu är far cry 3 men en blandning av diverse strategispel.</p>

{$zeus['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Zeus.
include(ZEUS_THEME_PATH);
