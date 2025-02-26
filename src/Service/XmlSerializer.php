<?php

/*
 * Copyright 2018 SCTR Services
 *
 * Distribution and reproduction are prohibited.
 *
 * @package     greenrope-api-client
 * @copyright   SCTR Services LLC 2018
 * @license     No License (Proprietary)
 */

namespace Sctr\Greenrope\Api\Service;

use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class XmlSerializer
{
    /** @var Serializer */
    private $serializer;

    public function __construct()
    {
        $this->serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new SerializedNameAnnotationStrategy(
                    new CamelCaseNamingStrategy()
                )
            )
            ->build();
    }

    public function deserializeXml($xmlData, $class)
    {
        return $this->serializer->deserialize($xmlData, $class, 'xml');
    }

    public function serializeObjectToXml($object)
    {
        $result = $this->serializer->serialize($object, 'xml');

        $result = str_replace("<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n", '', $result);

        return $result;
    }
}
