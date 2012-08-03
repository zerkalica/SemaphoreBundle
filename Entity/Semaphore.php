<?php
namespace Millwright\SemaphoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Millwright\SemaphoreBundle\Model\Semaphore as BaseSemaphore;

/**
 * Semaphore entity
 *
 * @ORM\Entity()
 *
 * @ORM\Table(name="semaphore__semaphore",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="semaphore_key_idx", columns={"semaphore_key"})}
 * )
 */
class Semaphore extends BaseSemaphore
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="expire_date", type="datetime", nullable=false)
     */
    protected $date;

    /**
     * @ORM\Column(name="semaphore_key", type="string", nullable=false)
     */
    protected $key;
}
