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

use Sonata\AdminBundle\Datagrid\ProxyQueryInterface;
use Sonata\AdminBundle\Filter\Filter as BaseFilter;

abstract class Filter extends BaseFilter
{
    protected $active = false;

    /**
     * {@inheritdoc}
     */
    public function apply($queryBuilder, $value)
    {
        $this->value = $value;

        $this->filter($queryBuilder, null, $this->getFieldName(), $value);
    }

    public function getFieldName()
    {
        $fieldName = $this->getOption('field_name');

        if (is_array($this->getOption('parent_association_mappings'))) {
            foreach($this->getOption('parent_association_mappings') as $map) {
                if(!empty($map['name'])) {
                    $fieldName = $map['name'] . "." . $fieldName;
                } elseif (!empty($map['fieldName'])) {
                    $fieldName = $map['fieldName'] . $fieldName;
                }
            }
        }
        
        if (!$fieldName) {
            throw new \RuntimeException(sprintf('The option `field_name` must be set for field: `%s`', $this->getName()));
        }

        return $fieldName;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ProxyQueryInterface $queryBuilder
     * @param string                                           $operation
     * @param string                                           $field
     * @param string                                           $value
     */
    protected function applyType(ProxyQueryInterface $queryBuilder, $operation, $field, $value = null)
    {
        $queryBuilder->field($field)->$operation($value);
        $this->active = true;
    }

    /**
     * {@inheritdoc}
     */
    public function isActive()
    {
        return $this->active;
    }
}
