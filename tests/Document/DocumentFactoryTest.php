<?php

/*
 * This file is part of the ADELE api.
 *
 * Copyright (C) 2015 ADELE
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\JsonApi\Tests\Document;

use Elao\JsonApi\Document;
use PHPUnit_Framework_TestCase;

class DocumentFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Document\DocumentFactory
     */
    protected $factory;

    protected function setUp()
    {
        $this->factory = new Document\DocumentFactory();
    }

    public function invalidDataProvider()
    {
        return [
            [[]],
            [['data' => null, 'errors' => null]],
            [['included' => null]]
        ];
    }

    /**
     * @dataProvider invalidDataProvider
     */
    public function testInvalid(array $data)
    {
        $this->expectException(\InvalidArgumentException::class);

        $this->factory->fromArray($data);
    }

    public function testData()
    {
        $document = $this->factory->fromArray(['data' => null]);

        $this->assertInstanceOf(Document\DataDocument::class, $document);
    }

    public function testErrors()
    {
        $document = $this->factory->fromArray(['errors' => []]);

        $this->assertInstanceOf(Document\ErrorsDocument::class, $document);
    }

    public function testMeta()
    {
        $document = $this->factory->fromArray(['meta' => []]);

        $this->assertInstanceOf(Document\MetaDocument::class, $document);
    }
}
