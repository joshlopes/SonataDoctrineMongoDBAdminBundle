<?php

/*
* This file is part of the Sonata package.
*
* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
* (c) Kévin Dunglas <dunglas@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

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
     * Because we lack a time variable we select a range from the days start to end.
     *
     * @author Wesley van Opdorp <wesley.van.opdorp@freshheads.com>
     * @return mixed|null|string
     */
    public function getFieldType()
    {
        return $this->getOption('field_type', 'date');
    }
}
