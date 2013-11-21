<?php

namespace Leibowitz\Bundle\ProxyServiceBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(
 * collection="log",
 * repositoryClass="Leibowitz\Bundle\ProxyServiceBundle\Repository\LogRepository"
 * )
 */
class Log
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\EmbedOne(targetDocument="Request")
     */
    protected $request;

    /**
     * @MongoDB\EmbedOne(targetDocument="Response")
     */
    protected $response;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set request
     *
     * @param Acme\DemoBundle\Document\Request $request
     * @return self
     */
    public function setRequest(\Acme\DemoBundle\Document\Request $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Get request
     *
     * @return Acme\DemoBundle\Document\Request $request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set response
     *
     * @param Acme\DemoBundle\Document\Response $response
     * @return self
     */
    public function setResponse(\Acme\DemoBundle\Document\Response $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Get response
     *
     * @return Acme\DemoBundle\Document\Response $response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
