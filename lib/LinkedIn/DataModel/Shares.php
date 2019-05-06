<?php

namespace REverse\LinkedIn\DataModel;

class Shares extends Model
{
    /**
     * @var string
     */
    private $owner;

    /**
     * @var string
     */
    private $agent;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var ShareText
     */
    private $text;

    /**
     * @var ShareContent[]
     */
    private $content;

    /**
     * @var ShareDistributionTarget
     */
    private $distribution;

    /**
     * @var string
     */
    private $resharedShare;

    /**
     * @var string
     */
    private $originalShare;

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return Shares
     */
    public function setOwner(string $owner): Shares
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param string $agent
     * @return Shares
     */
    public function setAgent(string $agent): Shares
    {
        $this->agent = $agent;

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
     * @return Shares
     */
    public function setSubject(string $subject): Shares
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
     * @return Shares
     */
    public function setText(ShareText $text): Shares
    {
        $this->text = $text;

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
     * @return Shares
     */
    public function setContent(ShareContent $content): Shares
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return ShareDistributionTarget
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * @param ShareDistributionTarget $distribution
     * @return Shares
     */
    public function setDistribution(ShareDistributionTarget $distribution): Shares
    {
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * @return string
     */
    public function getResharedShare()
    {
        return $this->resharedShare;
    }

    /**
     * @param string $resharedShare
     * @return Shares
     */
    public function setResharedShare(string $resharedShare): Shares
    {
        $this->resharedShare = $resharedShare;

        return $this;
    }

    /**
     * @return string
     */
    public function getOriginalShare()
    {
        return $this->originalShare;
    }

    /**
     * @param string $originalShare
     * @return Shares
     */
    public function setOriginalShare(string $originalShare): Shares
    {
        $this->originalShare = $originalShare;

        return $this;
    }
}
