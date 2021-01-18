<?php

namespace MageMastery\Todo\Model\ResourceModel\Task;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Task::class, TaskResource::class);
    }
}
