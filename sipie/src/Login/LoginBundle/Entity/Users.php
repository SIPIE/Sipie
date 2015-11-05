<?php

namespace Login\LoginBundle\Entity;

/**
 * Users
 */
class Users
{
    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $name;


    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Users
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

