<?php

abstract class SeparateNode
{
    private $value;
    private $next = null;
    private $previous = null;

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return null
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param null $next
     */
    public function setNext($next): void
    {
        $this->next = $next;
    }

    abstract function getPrevious();
    abstract function setPrevious($previous);
}