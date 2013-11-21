<?php

namespace Leibowitz\Bundle\ProxyServiceBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Response
{

    /**
     * @MongoDB\String
     */
    protected $body;

    /**
     * @MongoDB\Hash
     */
    protected $headers;

    /**
     * Set body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get body
     *
     * @return string $body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set headers
     *
     * @param string $headers
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * Get headers
     *
     * @return string $headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}
