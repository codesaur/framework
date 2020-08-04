<?php namespace codesaur\Generic;

use codesaur\Globals\Session;

class Language extends Base implements LanguageInterface
{
    private $_current;
    private $_languages;

    private $_alias;
    private $_session;
    
    function __construct(Session $session)
    {
        $this->_session = $session;
    }

    public function create(array $languages, string $alias)
    {
        if (empty($languages)) {
            return;
        }
        
        $this->_alias = $alias;
        $this->_languages = $languages;

        if ($this->getSession()->check($this->getAlias())) {
            if ( ! $this->select($this->getSession()->get($this->getAlias()))) {
                \reset($languages);
                $this->select(\key($languages));
            }
        } else {
            $this->select(\key($languages));
        }
    }
    
    public function __toString()
    {
        return $this->current();
    }
    
    public function created() : bool
    {
        return $this->complete() !== null;
    }
    
    public function select(string $select)
    {
        if ( ! $this->check($select)) {
            return false;
        }
        
        $this->_current = $select;
        $this->getSession()->set($this->getAlias(), $select);
        
        return $select;
    }
    
    public function get(string $key)
    {
        if ($this->check($key)) {
            return $this->_languages[$key];
        } else {
            return false;
        }
    }
    
    public function check(string $key) : bool
    {
        return isset($this->_languages[$key]);
    }

    public function confirm(string $key, string $onfail = 'en') : string
    {
        if ($this->check($key)) {
            return $key;
        }
        
        if ($this->check($onfail)) {
            return $onfail;
        }
        
        return $this->codes()[0];
    }

    public function count() : int
    {
        return \count($this->_languages);
    }

    public function complete()
    {
        return $this->_languages;
    }

    public function codes() : array
    {
        return \array_keys($this->_languages);
    }

    public function names() : array
    {
        return \array_values($this->_languages);
    }
    
    public function short() : string
    {
        return $this->current();
    }
    
    public function full(string $key = null) : string
    {
        return $this->get($key ?? $this->current());
    }
    
    public function current()
    {
        return $this->_current;
    }
    
    public function code() : string
    {
        return $this->current();
    }

    public function name() : string
    {
        return $this->full();
    }

    public function getSession() : Session
    {
        return $this->_session;
    }
    
    public function getAlias() : string
    {
        return $this->_alias;
    }
}
