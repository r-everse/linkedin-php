<?php

namespace REverse\LinkedIn\DataModel;

class Thumbnail
{
    /**
     * @var array
     */
    private $authors = [];

    /**
     * @var object|array
     */
    private $imageSpecificContent;

    /**
     * @var array
     */
    private $publishers = [];

    /**
     * @var string
     */
    private $resolvedUrl;

    /**
     * @return array
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @param array $authors
     * @return Thumbnail
     */
    public function setAuthors(array $authors): Thumbnail
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * @return object
     */
    public function getImageSpecificContent()
    {
        return $this->imageSpecificContent;
    }

    /**
     * @param object|array $imageSpecificContent
     * @return Thumbnail
     */
    public function setImageSpecificContent($imageSpecificContent): Thumbnail
    {
        $this->imageSpecificContent = $imageSpecificContent;

        return $this;
    }

    /**
     * @return array
     */
    public function getPublishers(): array
    {
        return $this->publishers;
    }

    /**
     * @param array $publishers
     * @return Thumbnail
     */
    public function setPublishers(array $publishers): Thumbnail
    {
        $this->publishers = $publishers;

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
     * @return Thumbnail
     */
    public function setResolvedUrl(string $resolvedUrl): Thumbnail
    {
        $this->resolvedUrl = $resolvedUrl;

        return $this;
    }
}