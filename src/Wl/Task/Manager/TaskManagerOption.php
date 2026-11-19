<?php

namespace WlSdk\Wl\Task\Manager;

use WlSdk\WlSdkClient;

/**
 * Returns the settings of the table of the Task Manager of the signed-in staff member.
 */
class TaskManagerOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the settings of the table of the Task Manager of the signed-in staff member.
     *
     * Gives the shown columns in their order and the size of a page that the staff member chose in the business,
     * or
     * the defaults when they changed nothing: every column but Date created, and 25 tasks a page.
     *
     * @return TaskManagerOptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TaskManagerOptionGetRequest $request): TaskManagerOptionGetResponse
    {
        return new TaskManagerOptionGetResponse($this->client->request('/Wl/Task/Manager/TaskManagerOption.json', $request->params(), 'GET'));
    }

    /**
     * Saves the settings of the table of the Task Manager of the signed-in staff member.
     *
     * Saves the shown columns in their order, or sets them back to the default, and the size of a page. A setting
     * that is not given stays as it is. The settings are kept per staff member and business.
     *
     * @return TaskManagerOptionPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TaskManagerOptionPutRequest $request): TaskManagerOptionPutResponse
    {
        return new TaskManagerOptionPutResponse($this->client->request('/Wl/Task/Manager/TaskManagerOption.json', $request->params(), 'PUT'));
    }
}
