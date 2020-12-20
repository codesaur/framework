<?php namespace App\Blog;

/**
 * Template: Blog
 *  Creator: https://getbootstrap.com/docs/4.5/examples/blog
 */

use codesaur as single;

use Velociraptor\TwigTemplate;
use Velociraptor\IndexTemplate;

class BlogTemplate extends IndexTemplate
{
    function __construct(string $template = null, array $vars = null)
    {
        parent::__construct(\dirname(__FILE__) . '/home/blog.index.html');
        
        $general = single::controller()->indoget('/web/general/system/' . single::language()->current());
        if (isset($general['result'])) {
            $this->set('general', $general['result']);
        }

        $menudata = single::controller()->indoget('/web/menu/system/' . single::language()->current());
        if (isset($menudata['result'])) {
            $this->set('menudata', $menudata['result']);
        }
        
        if (isset($template)) {
            $this->set('content', new TwigTemplate($template, $vars));
        }
    }
}
