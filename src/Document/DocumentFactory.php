<?php

/*
 * This file is part of the Elao JsonApi component.
 *
 * Copyright © Elao
 *
 * @author Elao <contact@elao.com>
 */

namespace Elao\JsonApi\Document;

/**
 * Document factory
 *
 * @package Elao\JsonApi
 */
class DocumentFactory
{
    /**
     * From array
     *
     * @param array $data
     *
     * @throws \InvalidArgumentException
     * @return DocumentInterface
     *
     */
    public function fromArray(array $data)
    {
        // Data
        if (array_key_exists('data', $data)) {
            if (array_key_exists('errors', $data)) {
                throw new \InvalidArgumentException('The members "data" and "errors" MUST NOT coexist in the same document.');
            }

            return $this->doCreateData($data['data']);
        }

        if (array_key_exists('included', $data)) {
            throw new \InvalidArgumentException('If a document does not contain a top-level "data" key, the "included" member MUST NOT be present either.');
        }

        // Errors
        if (array_key_exists('errors', $data)) {
            return $this->doCreateErrors($data['errors']);
        }

        // Meta
        if (array_key_exists('meta', $data)) {
            return $this->doCreateMeta($data['meta']);
        }

        throw new \InvalidArgumentException('A document MUST contain at least one of the following top-level members: "data", "errors", "meta"');
    }

    /**
     * Do create data document
     *
     * @param array|null $data
     *
     * @return DataDocument
     */
    protected function doCreateData(array $data = null)
    {
        return new DataDocument($data);
    }

    /**
     * Do create errors document
     *
     * @param array $data
     *
     * @return ErrorsDocument
     */
    protected function doCreateErrors(array $data)
    {
        return new ErrorsDocument($data);
    }

    /**
     * Do create meta document
     *
     * @param array $data
     *
     * @return MetaDocument
     */
    protected function doCreateMeta(array $data)
    {
        return new MetaDocument($data);
    }
}
