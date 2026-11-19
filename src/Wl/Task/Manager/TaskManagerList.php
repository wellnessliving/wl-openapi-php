<?php

namespace WlSdk\Wl\Task\Manager;

use WlSdk\WlSdkClient;

/**
 * Returns one page of the tasks of the Task Manager.
 */
class TaskManagerList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns one page of the tasks of the Task Manager.
     *
     * Gives the tasks that the signed-in staff member may see in the business, searched, filtered, sorted and cut
     * into
     * pages, with the counts of the tabs and the staff members the staff filter offers. A staff member without the
     * privilege "All tasks" sees only the tasks assigned to them. In a franchise in the flexible travel mode the
     * tasks of
     * every location are listed, and the filter of the location picks the staff of the home location (the
     * default), of
     * the other locations or of every location.
     *
     * @return TaskManagerListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TaskManagerListGetRequest $request): TaskManagerListGetResponse
    {
        return new TaskManagerListGetResponse($this->client->request('/Wl/Task/Manager/TaskManagerList.json', $request->params(), 'GET'));
    }
}
