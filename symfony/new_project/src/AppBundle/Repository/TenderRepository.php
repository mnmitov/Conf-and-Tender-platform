<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Tender;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping;

/**
 * TenderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TenderRepository extends \Doctrine\ORM\EntityRepository
{
  public function __construct(EntityManagerInterface $em, Mapping\ClassMetadata $metadata = null)
  {
    parent::__construct($em, $metadata == null ? new Mapping\ClassMetadata(Tender::class) : $metadata);
  }
}
