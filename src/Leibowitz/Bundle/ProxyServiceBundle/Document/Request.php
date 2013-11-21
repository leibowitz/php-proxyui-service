<?php

namespace Leibowitz\Bundle\ProxyServiceBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument
 */
class Request
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
     * @MongoDB\String
     */
    protected $host;

    /**
     * @MongoDB\String
     */
    protected $path;

    /**
     * @MongoDB\Float
     */
    protected $time;

    /**
     * @MongoDB\Date
     */
    protected $date;

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

    /**
     * Set host
     *
     * @param string $host
     * @return self
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Get host
     *
     * @return string $host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Get path
     *
     * @return string $path
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set time
     *
     * @param float $time
     * @return self
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return float $time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set date
     *
     * @param date $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return date $date
     */
    public function getDate()
    {
        return $this->date;
    }
}
