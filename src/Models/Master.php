<?php
declare(strict_types=1);

namespace LotGD\Core\Models;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;

use LotGD\Core\Tools\Model\AutoScaleFighter;

/**
 * The Monster entity
 *
 * @Entity
 * @Table(name="masters")
 */
class Master extends BasicEnemy
{
    use AutoScaleFighter;
}
