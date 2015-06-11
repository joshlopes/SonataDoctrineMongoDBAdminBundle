<?php

namespace Sonata\DoctrineMongoDBAdminBundle\Filter;

class DateTimeRangeFilter extends AbstractDateFilter
{
    /**
     * This Filter allows filtering by time
     *
     * @var boolean
     */
    protected $time = true;

    /**
     * This is a range filter
     *
     * @var boolean
     */
    protected $range = true;

    /**
     * {@inheritdoc}
     */
    public function getFieldType()
    {
        return $this->getOption('field_type', 'sonata_type_datetime_range');
    }
}
