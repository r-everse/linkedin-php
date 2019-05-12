<?php

namespace REverse\LinkedIn\DataModel;

class ShareResponse extends Model
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $activity;

    /**
     * @var ShareContent
     */
    private $content;

    /**
     * @var bool
     */
    private $edited;

    /**
     * @var string
     */
    private $owner;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var ShareText
     */
    private $text;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ShareResponse
     */
    public function setId(string $id): ShareResponse
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param string $activity
     * @return ShareResponse
     */
    public function setActivity(string $activity): ShareResponse
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * @return ShareContent
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param ShareContent $content
     * @return ShareResponse
     */
    public function setContent(ShareContent $content): ShareResponse
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEdited()
    {
        return $this->edited;
    }

    /**
     * @param bool $edited
     * @return ShareResponse
     */
    public function setEdited(bool $edited): ShareResponse
    {
        $this->edited = $edited;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return ShareResponse
     */
    public function setOwner(string $owner): ShareResponse
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return ShareResponse
     */
    public function setSubject(string $subject): ShareResponse
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return ShareText
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param ShareText $text
     * @return ShareResponse
     */
    public function setText(ShareText $text): ShareResponse
    {
        $this->text = $text;

        return $this;
    }
}
