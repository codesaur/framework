<?php namespace codesaur\Http;

use codesaur\Generic\Base;

class Controller extends Base implements ControllerInterface
{
    public function getNick() : string
    {
        return \str_replace($this->getMeClean(__CLASS__), '', $this->getMeClean());
    }

    public function route() : Route
    {
        if (isset($this->route)) {
            return $this->route;
        }

        return new Route();
    }
}
