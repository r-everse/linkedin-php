<?php

namespace REverse\LinkedIn\DataModel;

class ShareText extends Model
{
    /**
     * @var string
     */
    private $text;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return ShareText
     */
    public function setText(string $text): ShareText
    {
        $this->text = $text;

        return $this;
    }
}
