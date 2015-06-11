<?php

namespace Sonata\DoctrineMongoDBAdminBundle\Filter;

class DateTimeFilter extends AbstractDateFilter
{
    /**
     * Flag indicating that filter will filter by datetime instead by date
     * @var boolean
     */
    protected $time = true;

    /**
     * {@inheritdoc}
     */
    public function getFieldType()
    {
        return $this->getOption('field_type', 'datetime');
    }

}
