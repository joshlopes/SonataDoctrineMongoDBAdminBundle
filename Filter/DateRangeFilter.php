<?php

namespace Sonata\DoctrineMongoDBAdminBundle\Filter;

class DateRangeFilter extends AbstractDateFilter
{
    /**
     * This is a range filter
     * @var boolean
     */
    protected $range = true;

    /**
     * This filter has time
     * @var boolean
     */
    protected $time = false;

    /**
     * {@inheritdoc}
     */
    public function getFieldType()
    {
        return $this->getOption('field_type', 'sonata_type_date_range');
    }
}
