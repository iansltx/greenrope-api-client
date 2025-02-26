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

namespace Sctr\Greenrope\Api\Request\Broadcast;

use JMS\Serializer\Annotation as Serializer;
use Sctr\Greenrope\Api\Request\GreenropeRequest;

/**
 * @Serializer\XmlRoot("GetBroadcastsRequest")
 */
class GetBroadcastsRequest extends GreenropeRequest
{
    const ALLOWED_QUERY_PARAMS = [
        'Group_id',
        'Contact_id',
        'Datetime_sent',
        'updated_timestamp',
        'message_type',
        'get_all',
    ];

    /**
     * @Serializer\XmlAttributeMap()
     */
    protected $query;
}
