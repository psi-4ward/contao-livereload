<?php

/**
 * Contao-Livereload
 * A CSS livereload tool for Contao
 *
 * @copyright  4ward.media 2014 <http://www.4wardmedia.de>
 * @author     Christoph Wiechert <wio@psitrax.de>
 * @package    contao-livereload
 * @license    LGPL
 * @filesource
 */


// Register the classes
ClassLoader::addClasses(array
(
	'ContaoLivereload' 	=> 'system/modules/contao-livereload/ContaoLivereload.php',
));

