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
