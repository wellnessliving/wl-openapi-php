<?php

namespace WlSdk\Wl\Task\Staff;

use WlSdk\WlSdkClient;

/**
 * Returns the staff roles and the staff members of the business, for the assignment of tasks.
 */
class TaskStaffList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the staff roles and the staff members of the business, for the assignment of tasks.
     *
     * Lists every role of the business that is not removed, and every staff member whose account is not removed,
     * with
     * the flags that tell whether the staff member is active and whether the current user may assign a new task to
     * the staff member. In a franchise with the flexible travel mode the staff members of all the businesses of
     * the
     * franchise are listed; such a staff member who does not work in the current business has no role.
     *
     * The current user must be able to add tasks or to see all the tasks of the business.
     *
     * @return TaskStaffListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TaskStaffListGetRequest $request): TaskStaffListGetResponse
    {
        return new TaskStaffListGetResponse($this->client->request('/Wl/Task/Staff/TaskStaffList.json', $request->params(), 'GET'));
    }
}
