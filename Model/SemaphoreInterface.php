<?php
namespace Millwright\SemaphoreBundle\Model;

/**
 * Semaphore model interface
 */
interface SemaphoreInterface
{
    /**
     * Set semaphore creation date
     *
     * @param \DateTime $date
     *
     * @return SemaphoreInterface
     */
    function setDate(\DateTime $date);

    /**
     * Get semaphore creation date
     *
     * @return \DateTime
     */
    function getDate();

    /**
     * Set semaphore key
     *
     * @param string $key
     *
     * @return SemaphoreInterface
     */
    function setKey($key);

    /**
     * Get semaphore key
     *
     * @return string
     */
    function getKey();

    /**
     * Get semaphore id
     *
     * @return integer
     */
    function getId();
}
