<?php
declare(strict_types=1);

namespace MageMastery\Todo\Api;


use MageMastery\Todo\Api\Data\TaskInterface;

/**
 * Interface CustomerTaskListInterface
 * @package MageMastery\Todo\Api
 */
interface CustomerTaskListInterface
{
    /**
     * @return TaskInterface[]
     */
    public function getList();
}
