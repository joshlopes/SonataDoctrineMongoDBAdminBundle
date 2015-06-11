<?php

namespace Sonata\DoctrineMongoDBAdminBundle\Filter;

class DateFilter extends AbstractDateFilter
{

    /**
     * This filter has no range
     *
     * @var boolean
     */
    protected $range = false;

    /**
     * This filter does not allow filtering by time
     *
     * @var boolean
     */
    protected $time = false;

    /**
     * {@inheritdoc}
     */
    public function getFieldType()
    {
        return $this->getOption('field_type', 'date');
    }

}
