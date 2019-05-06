<?php

namespace REverse\LinkedIn\DataModel;

class BasicProfile extends Model
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $localizedLastName;

    /**
     * @var string
     */
    private $localizedFirstName;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return BasicProfile
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocalizedLastName()
    {
        return $this->localizedLastName;
    }

    /**
     * @param string $localizedLastName
     * @return BasicProfile
     */
    public function setLocalizedLastName($localizedLastName)
    {
        $this->localizedLastName = $localizedLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocalizedFirstName()
    {
        return $this->localizedFirstName;
    }

    /**
     * @param string $localizedFirstName
     * @return BasicProfile
     */
    public function setLocalizedFirstName($localizedFirstName)
    {
        $this->localizedFirstName = $localizedFirstName;

        return $this;
    }
}
