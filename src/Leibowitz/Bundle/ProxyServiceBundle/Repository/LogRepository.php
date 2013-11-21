<?php

namespace Leibowitz\Bundle\ProxyServiceBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;

class LogRepository extends DocumentRepository
{
    public function findAllOrderedByDate()
    {
        return $this->createQueryBuilder()
            ->sort('request.date', 'DESC')
            ->getQuery()
            ->execute();
    }

    public function findByHostOrderedByDate($host)
    {
        return $this->createQueryBuilder()
            ->sort('request.date', 'DESC')
            ->field('request.host')->equals($host)
            ->getQuery()
            ->execute();
    }
}
