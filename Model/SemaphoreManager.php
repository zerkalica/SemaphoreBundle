<?php
namespace Millwright\SemaphoreBundle\Model;

use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\ObjectIdentityInterface;

use Millwright\Semaphore\Model\SemaphoreManager as SemaphoreManagerBase;

/**
 * Semaphore manager extender
 */
class SemaphoreManager extends SemaphoreManagerBase
{
    /**
     * {@inheritDoc}
     *
     * @param string|ObjectIdentityInterface|object $key
     */
    public function acquire($key, $ttl = 60)
    {
        if (is_object($key)) {
            $key = $key instanceof ObjectIdentityInterface
                ? (string) $key
                : (string) ObjectIdentity::fromDomainObject($key);
        }

        return parent::acquire($key, $ttl);
    }
}
