<?php

namespace REverse\LinkedIn\DataModel;

class ShareContent extends Model
{
    const MEDIA_CATEGORY_NONE = 'NONE';
    const MEDIA_CATEGORY_ARTICLE = 'ARTICLE';
    const MEDIA_CATEGORY_IMAGE = 'IMAGE';
    const MEDIA_CATEGORY_RICH = 'RICH';
    const MEDIA_CATEGORY_VIDEO = 'VIDEO';
    const MEDIA_CATEGORY_CAROUSEL = 'CAROUSEL';

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $title;

    /**
     * @var ContentEntity[]
     */
    private $contentEntites = [];

    /**
     * @var string
     */
    private $shareMediaCategory;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ShareContent
     */
    public function setDescription(string $description): ShareContent
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return ShareContent
     */
    public function setTitle(string $title): ShareContent
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return ContentEntity[]
     */
    public function getContentEntites(): array
    {
        return $this->contentEntites;
    }

    /**
     * @param ContentEntity[] $contentEntites
     * @return ShareContent
     */
    public function setContentEntites(array $contentEntites): ShareContent
    {
        $this->contentEntites = $contentEntites;

        return $this;
    }

    /**
     * @return string
     */
    public function getShareMediaCategory()
    {
        return $this->shareMediaCategory;
    }

    /**
     * @param string $shareMediaCategory
     * @return ShareContent
     */
    public function setShareMediaCategory(string $shareMediaCategory): ShareContent
    {
        $this->shareMediaCategory = $shareMediaCategory;

        return $this;
    }
}
