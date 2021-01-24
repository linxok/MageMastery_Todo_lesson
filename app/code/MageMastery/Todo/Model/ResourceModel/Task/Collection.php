<?php

namespace MageMastery\Todo\Model\ResourceModel\Task;

use MageMastery\Todo\Api\Data\TaskInterface;
use MageMastery\Todo\Api\Data\TaskSearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use \MageMastery\Todo\Model\Task;
use \MageMastery\Todo\Model\ResourceModel\Task as TaskResource;

class Collection extends AbstractCollection implements TaskSearchResultInterface
{

    /**
     * @var SearchCriteriaInterface
     */
    private $searchCriteria;

    protected function _construct()
    {
        $this->_init(Task::class, TaskResource::class);
    }

    /**
     * @return SearchCriteriaInterface|void
     */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }
public function setSearchCriteria(SearchCriteriaInterface $searchCriteria)
{
    $this->searchCriteria= $searchCriteria;
    return $this;
}

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->getSize();
    }

    /**
     * @param int $totalCount
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        return $this;
    }

    public function setItems(array $items= null)
    {
        if (!$items) {
            return $this;
        }
        foreach ($items as $item){
            $this->addItem($item);
        }
        return $this;
    }
}
