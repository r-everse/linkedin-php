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
     * @var array|ContentEntity[]
     */
    private $contentEntities = [];

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
     * @return array|ContentEntity[]
     */
    public function getContentEntities(): array
    {
        return $this->contentEntities;
    }

    /**
     * @param array|ContentEntity[] $contentEntities
     * @return ShareContent
     */
    public function setContentEntities(array $contentEntities): ShareContent
    {
        $this->contentEntities = $contentEntities;

        return $this;
    }

    /**
     * @param ContentEntity $contentEntity
     *
     * @return ShareContent
     */
    public function addContentEntity(ContentEntity $contentEntity): ShareContent
    {
        $this->contentEntities[] = $contentEntity;

        return $this;
    }

    /**
     * @param ContentEntity $contentEntity
     *
     * @return ShareContent
     */
    public function removeContentEntity(ContentEntity $contentEntity): ShareContent
    {
        $key = array_search($contentEntity, $this->contentEntities);

        if ($key !== false) {
            unset($contentEntity[$key]);
        }

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
