<?php
/**
 * Config-file for Zeus. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Zeus paths.
 *
 */
define('ZEUS_INSTALL_PATH', __DIR__ . '/..');
define('ZEUS_THEME_PATH', ZEUS_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(ZEUS_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Zeus variable.
 *
 */
$zeus = array();
 
 
/**
 * Site wide settings.
 *
 */
$zeus['lang']         = 'sv';
$zeus['title_append'] = ' | oophp kursmaterial | Powered by Zeus';

$zeus['header'] = <<<EOD
<img class='sitelogo' src='img/zeus2.jpeg' alt='zeus Logo' height="100" width="100"/>
<span class='sitetitle'>Me - Jesper Johnsson</span>
<span class='siteslogan'>Powered by Zeus</span>
EOD;

$zeus['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Jesper Johnsson (jesper.johnsson1995@hotmail.com) | <a href='#'>Zeus på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$zeus['byline'] = <<<EOD
<footer class="byline">
  <figure class="right"><img src="http://www.student.bth.se/~jejd14/oophp/zeus/webroot/img/me.jpg" alt="Bild Jesper" height="75">
    <figcaption>En glad Jesper.</figcaption>
  </figure>
  <p>Jag går just nu mitt första år på BTH, på programmet webbprogrammering.</p>

  <nav>
    <ul class='icons'>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_362_google+_alt.png' alt='google+-icon' title='Jesper på Google+' width='24' height='24'/></a></li>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_377_linked_in.png' alt='linkedin-icon' title='Jesper på LinkedIn' width='24' height='24'/></a></li>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_390_facebook.png' alt='facebook-icon' title='Jesper på Facebook' width='24' height='24'/></a></li>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_392_twitter.png' alt='twitter-icon' title='Jesper på Twitter' width='24' height='24'/></a></li>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_382_youtube.png' alt='youtube-icon' title='Jesper på YouTube' width='24' height='24'/></a></li>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_395_flickr.png' alt='flickr-icon' title='Jesper på Flickr' width='24' height='24'/></a></li>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_381_github.png' alt='github-icon' title='Jesper på GitHub' width='24' height='24'/></a></li>
      <li><a href='#'><img src='http://dbwebb.se/img/glyphicons/png/glyphicons_412_instagram.png' alt='instagram-icon' title='Jesper på Instagram' width='24' height='24'/></a></li>
    </ul>
  </nav>

</footer>
EOD;



/**
 * The navbar
 *
 */
//$zeus['navbar'] = null; // To skip the navbar
$zeus['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);

/**
 * Theme related settings.
 *
 */
//$zeus['stylesheet'] = 'css/style.css';
$zeus['stylesheets'] = array('css/style.css');
$zeus['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$zeus['modernizr'] = 'js/modernizr.js';
$zeus['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$zeus['jquery'] = null; // To disable jQuery

$zeus['javascript_include'] = array();
//$zeus['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Google analytics.
 *
 */
$zeus['google_analytics'] = 'UA-56629130-1'; // Set to null to disable google analytics
