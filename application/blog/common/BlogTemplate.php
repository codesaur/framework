<?php namespace App\Blog\Common;

/**
 * Template: Blog
 *  Creator: https://getbootstrap.com/docs/4.5/examples/blog
 */

use codesaur as single;

use codesaur\HTML\TwigTemplate;
use codesaur\HTML\IndexTemplate;

class BlogTemplate extends IndexTemplate
{
    function __construct(string $template = null, array $vars = null)
    {
        parent::__construct(\dirname(__FILE__) . '/blog.index.html');
        
        $general = single::controller()->indoget('/web/general/system/' . single::flag());
        if (isset($general['result'])) {
            $this->set('general', $general['result']);
        }

        $menudata = single::controller()->indoget('/web/menu/system/' . single::flag());
        if (isset($menudata['result'])) {
            $this->set('menudata', $menudata['result']);
        }
        
        if (isset($template)) {
            $vars['index'] = $this;
            $this->set('content', new TwigTemplate($template, $vars));
        }
    }
}
