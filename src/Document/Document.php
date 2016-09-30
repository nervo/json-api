<?php

namespace Elao\JsonApi\Document;

/**
 * Document
 *
 * @package Elao\JsonApi
 */
abstract class Document implements DocumentInterface
{
    protected $meta;

    /**
     * Factory
     *
     * @var DocumentFactory
     */
    private static $factory = null;

    /**
     * {@inheritdoc}
     */
    abstract public function toArray();

    /**
     * From array
     *
     * @param array $data
     *
     * @return DocumentInterface
     */
    public static function fromArray(array $data)
    {
        if (!self::$factory) {
            self::$factory = new DocumentFactory();
        }

        return self::$factory->fromArray($data);
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return json_encode($this);
    }
}
