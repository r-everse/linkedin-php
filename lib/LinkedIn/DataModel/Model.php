<?php

namespace REverse\LinkedIn\DataModel;

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
        $normalizers = [new ObjectNormalizer()];

        $this->serializer = new Serializer($normalizers, $encoders);
    }

    public function jsonSerialize()
    {
        return $this->serializer->serialize($this, 'json');
    }
}
