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

namespace Sctr\Greenrope\Api\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot(name="UserDefinedField")
 */
class UserDefinedField extends AbstractModel
{
    public const ALLOWED_FIELD_TYPES = [
        'Select'    => 'Select',
        'Checkbox'  => 'Checkbox',
        'Text'      => 'Text',
        'ShortText' => 'ShortText',
    ];

    public const ALLOWED_CONTACT_EDITABLE = [
        'Hidden'   => 'Hidden',
        'Visible'  => 'Visible',
        'Editable' => 'Editable',
    ];

    const ALLOWED_QUERY_PARAMS = [
        'fieldname',
    ];

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("UserFieldID")
     */
    protected $id;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("integer")
     */
    protected $group;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FieldName")
     */
    protected $name;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FieldType")
     */
    protected $type;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FieldValue")
     */
    protected $fieldValue;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("string")
     */
    protected $possibleValues;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("string")
     */
    protected $contactEditable;

    /**
     * @Serializer\XmlElement(cdata=false)
     * @Serializer\SkipWhenEmpty()
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $updatedTimeStamp;

    /**
     * @Serializer\XmlValue(cdata=false)
     * @Serializer\Type("string")
     */
    protected $value;
}
