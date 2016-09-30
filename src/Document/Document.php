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

    protected $jsonapi;

    protected $links;

    /**
     * Factory
     *
     * @var DocumentFactory
     */
    private static $factory = null;

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $data = [];

        if (isset($this->meta)) {
            $data['meta'] = $this->meta;
        }

        if (isset($this->jsonapi)) {
            $data['jsonapi'] = $this->jsonapi;
        }

        if (isset($this->links)) {
            $data['links'] = $this->links;
        }

        return $data;
    }

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
