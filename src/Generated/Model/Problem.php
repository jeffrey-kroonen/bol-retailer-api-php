<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Problem
{
    /**
     * Type URI for this problem. Fixed value: https://api.bol.com/problems.
     *
     * @var string
     */
    protected $type;
    /**
     * Title describing the nature of the problem.
     *
     * @var string
     */
    protected $title;
    /**
     * HTTP status returned from the endpoint causing the problem.
     *
     * @var int
     */
    protected $status;
    /**
     * Detailed error message describing in additional detail what caused the service to return this problem.
     *
     * @var string
     */
    protected $detail;
    /**
     * Host identifier describing the server instance that reported the problem.
     *
     * @var string
     */
    protected $host;
    /**
     * Full URI path of the resource that reported the problem.
     *
     * @var string
     */
    protected $instance;
    /**
     * 
     *
     * @var object[]
     */
    protected $violations;
    /**
     * Type URI for this problem. Fixed value: https://api.bol.com/problems.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type URI for this problem. Fixed value: https://api.bol.com/problems.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Title describing the nature of the problem.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title describing the nature of the problem.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * HTTP status returned from the endpoint causing the problem.
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * HTTP status returned from the endpoint causing the problem.
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Detailed error message describing in additional detail what caused the service to return this problem.
     *
     * @return string
     */
    public function getDetail() : string
    {
        return $this->detail;
    }
    /**
     * Detailed error message describing in additional detail what caused the service to return this problem.
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail(string $detail) : self
    {
        $this->detail = $detail;
        return $this;
    }
    /**
     * Host identifier describing the server instance that reported the problem.
     *
     * @return string
     */
    public function getHost() : string
    {
        return $this->host;
    }
    /**
     * Host identifier describing the server instance that reported the problem.
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host) : self
    {
        $this->host = $host;
        return $this;
    }
    /**
     * Full URI path of the resource that reported the problem.
     *
     * @return string
     */
    public function getInstance() : string
    {
        return $this->instance;
    }
    /**
     * Full URI path of the resource that reported the problem.
     *
     * @param string $instance
     *
     * @return self
     */
    public function setInstance(string $instance) : self
    {
        $this->instance = $instance;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getViolations() : array
    {
        return $this->violations;
    }
    /**
     * 
     *
     * @param object[] $violations
     *
     * @return self
     */
    public function setViolations(array $violations) : self
    {
        $this->violations = $violations;
        return $this;
    }
}