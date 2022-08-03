<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Condition
{
    /**
     * The condition of the offered product.
     *
     * @var string
     */
    protected $name;
    /**
     * The category of the condition. If not given NEW or SECONDHAND is derived from NAME.
     *
     * @var string
     */
    protected $category;
    /**
     * The description of the condition of the product. Only allowed if name is not NEW and may not contain e-mail addresses.
     *
     * @var string
     */
    protected $comment;
    /**
     * The condition of the offered product.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The condition of the offered product.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The category of the condition. If not given NEW or SECONDHAND is derived from NAME.
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * The category of the condition. If not given NEW or SECONDHAND is derived from NAME.
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->category = $category;
        return $this;
    }
    /**
     * The description of the condition of the product. Only allowed if name is not NEW and may not contain e-mail addresses.
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * The description of the condition of the product. Only allowed if name is not NEW and may not contain e-mail addresses.
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
}