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


// Fields
$GLOBALS['TL_DCA']['tl_user']['fields']['contaoLivereload_enabled'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_user']['contaoLivereload_enabled'],
    'default'                 => '',
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_user']['fields']['contaoLivereload_server'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_user']['contaoLivereload_server'],
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default 'http://localhost'"
);


foreach($GLOBALS['TL_DCA']['tl_user']['palettes'] as $k => $v)
{
    if($k == '__selector__') continue;
    $GLOBALS['TL_DCA']['tl_user']['palettes'][$k] = str_replace(';{password_legend',';{contaoLivereload_legend},contaoLivereload_enabled,contaoLivereload_server;{password_legend',$v);
}
