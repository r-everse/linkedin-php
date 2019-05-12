<?php

namespace REverse\LinkedIn\DataModel;

use REverse\LinkedIn\Serializer\Normalizer\LinkedInObjectNormalizer;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
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
        $linkedInNormalizer = new LinkedInObjectNormalizer(null, null, null, new ReflectionExtractor());

        $encoders = [new JsonEncoder()];
        $normalizers = [new ArrayDenormalizer(), $linkedInNormalizer];

        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function jsonSerialize()
    {
        return $this->serializer->serialize($this, 'json');
    }

    public function initObjectByJson(string $json)
    {
        $this->serializer->deserialize($json, get_class($this), 'json', ['object_to_populate' => $this]);
    }
}
