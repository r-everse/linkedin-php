<?php

namespace REverse\LinkedIn\DataModel;

use REverse\LinkedIn\Serializer\Normalizer\LinkedInObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Model implements \JsonSerializable
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new LinkedInObjectNormalizer()];

        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function jsonSerialize()
    {
        return $this->serializer->serialize($this, 'json');
    }

    public function initObjectByJson(string $json)
    {
        $this->serializer->deserialize($json, get_class($this), 'json', array('object_to_populate' => $this));
    }
}
