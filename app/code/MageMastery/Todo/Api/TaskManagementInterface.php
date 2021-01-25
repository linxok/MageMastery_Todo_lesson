<?php


namespace MageMastery\Todo\Api;

use MageMastery\Todo\Api\Data\TaskInterface;

/**
 * Interface TaskManagementInterface
 * @api
 */
interface TaskManagementInterface
{
    public function save(TaskInterface $task);
    public function delete(TaskInterface $task);

}
