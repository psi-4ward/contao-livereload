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

if(TL_MODE == 'FE'){
    $GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('ContaoLivereload', 'addJscript');
}