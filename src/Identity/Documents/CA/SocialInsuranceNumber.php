<?php
namespace ID3Global\Identity\Documents\CA;

use ID3Global\Identity\ID3IdentityObject;

class SocialInsuranceNumber extends ID3IdentityObject
{
    /**
     * @var string The driver licence identifier
     */
    private $Number;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return self
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
        return $this;
    }
}
