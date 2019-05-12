<?php

namespace REverse\LinkedIn\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class LinkedInObjectNormalizer extends ObjectNormalizer
{
    /**
     * {@inheritDoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = parent::normalize($object, $format, $context);

        return array_filter($data, function ($value) {
            return null !== $value;
        });
    }
}
