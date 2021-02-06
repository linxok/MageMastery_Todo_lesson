<?php


namespace MageMastery\Todo\Api;
use MageMastery\Todo\Api\Data\TaskInterface;
use MageMastery\Todo\Api\Data\TaskSearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface TaskRepositoryInterface
 * @api
 */

interface TaskRepositoryInterface
{
    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return TaskSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): TaskSearchResultInterface;

    /**
     * @param int $taskID
     * @return TaskInterface
     */
    public function get(int $taskID): TaskInterface;
}
