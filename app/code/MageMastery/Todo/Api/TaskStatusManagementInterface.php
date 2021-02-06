<?php

namespace MageMastery\Todo\Api;

/**
 * Interface TaskStatusManagementInterface
 * @api
 */
interface TaskStatusManagementInterface
{
    /**
     * @param int $taskId
     * @param string $status
     * @return bool
     */
    public function change(int $taskId, string $status): bool;
}
