<?php
namespace Millwright\SemaphoreBundle\Model;

use Millwright\Util\DateUtil;
use Millwright\Util\PhpUtil;

/**
 * Semaphore model
 */
abstract class Semaphore implements SemaphoreInterface
{
    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var integer
     */
    protected $id;

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTime $date)
    {
        DateUtil::setDateTime($this->date, $date);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {
        return PhpUtil::cloneObject($this->date);
    }
}
