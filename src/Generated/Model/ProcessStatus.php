<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ProcessStatus
{
    /**
     * The process status id.
     *
     * @var string
     */
    protected $processStatusId;
    /**
     * The id of the object being processed. E.g. in case of a shipment process id, you will receive the id of the order item being processed.
     *
     * @var string
     */
    protected $entityId;
    /**
     * Name of the requested action that is being processed.
     *
     * @var string
     */
    protected $eventType;
    /**
     * Describes the action that is being processed.
     *
     * @var string
     */
    protected $description;
    /**
     * Status of the action being processed.
     *
     * @var string
     */
    protected $status;
    /**
     * Shows error message if applicable.
     *
     * @var string
     */
    protected $errorMessage;
    /**
     * Time of creation of the response.
     *
     * @var \DateTime
     */
    protected $createTimestamp;
    /**
     * Lists available actions applicable to this endpoint.
     *
     * @var object[]
     */
    protected $links;
    /**
     * The process status id.
     *
     * @return string
     */
    public function getProcessStatusId() : string
    {
        return $this->processStatusId;
    }
    /**
     * The process status id.
     *
     * @param string $processStatusId
     *
     * @return self
     */
    public function setProcessStatusId(string $processStatusId) : self
    {
        $this->processStatusId = $processStatusId;
        return $this;
    }
    /**
     * The id of the object being processed. E.g. in case of a shipment process id, you will receive the id of the order item being processed.
     *
     * @return string
     */
    public function getEntityId() : string
    {
        return $this->entityId;
    }
    /**
     * The id of the object being processed. E.g. in case of a shipment process id, you will receive the id of the order item being processed.
     *
     * @param string $entityId
     *
     * @return self
     */
    public function setEntityId(string $entityId) : self
    {
        $this->entityId = $entityId;
        return $this;
    }
    /**
     * Name of the requested action that is being processed.
     *
     * @return string
     */
    public function getEventType() : string
    {
        return $this->eventType;
    }
    /**
     * Name of the requested action that is being processed.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType) : self
    {
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * Describes the action that is being processed.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Describes the action that is being processed.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Status of the action being processed.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Status of the action being processed.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Shows error message if applicable.
     *
     * @return string
     */
    public function getErrorMessage() : string
    {
        return $this->errorMessage;
    }
    /**
     * Shows error message if applicable.
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage(string $errorMessage) : self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Time of creation of the response.
     *
     * @return \DateTime
     */
    public function getCreateTimestamp() : \DateTime
    {
        return $this->createTimestamp;
    }
    /**
     * Time of creation of the response.
     *
     * @param \DateTime $createTimestamp
     *
     * @return self
     */
    public function setCreateTimestamp(\DateTime $createTimestamp) : self
    {
        $this->createTimestamp = $createTimestamp;
        return $this;
    }
    /**
     * Lists available actions applicable to this endpoint.
     *
     * @return object[]
     */
    public function getLinks() : array
    {
        return $this->links;
    }
    /**
     * Lists available actions applicable to this endpoint.
     *
     * @param object[] $links
     *
     * @return self
     */
    public function setLinks(array $links) : self
    {
        $this->links = $links;
        return $this;
    }
}