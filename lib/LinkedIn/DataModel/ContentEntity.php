<?php

namespace REverse\LinkedIn\DataModel;

class ContentEntity extends Model
{
    /**
     * @var string
     */
    private $entity;

    /**
     * @var string
     */
    private $entityLocation;

    /**
     * @var string
     */
    private $resolvedUrl;

    /**
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param string $entity
     * @return ContentEntity
     */
    public function setEntity(string $entity): ContentEntity
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntityLocation()
    {
        return $this->entityLocation;
    }

    /**
     * @param string $entityLocation
     * @return ContentEntity
     */
    public function setEntityLocation(string $entityLocation): ContentEntity
    {
        $this->entityLocation = $entityLocation;

        return $this;
    }

    /**
     * @return string
     */
    public function getResolvedUrl()
    {
        return $this->resolvedUrl;
    }

    /**
     * @param string $resolvedUrl
     * @return ContentEntity
     */
    public function setResolvedUrl(string $resolvedUrl): ContentEntity
    {
        $this->resolvedUrl = $resolvedUrl;

        return $this;
    }
}
