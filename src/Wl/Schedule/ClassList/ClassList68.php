<?php

namespace WlSdk\Wl\Schedule\ClassList;

use WlSdk\WlSdkClient;

/**
 * This method is a modified Get method `get()`.
 * The difference is as follows:
 */
class ClassList68
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is a modified Get method `get()`.
The difference is as follows:
     *
     * - Some data for filtering is now transmitted by the post method.
     * Because the addition of the filters creates a scenario where we can easily reach the maximum URL length of
     * GET
     * requests and the browser refuse to send the request (situations with long class ID, event ID or staff ID
     * lists).
     *
     *  - Added generation of a separate 'Quick filter'.
     * This generation is enabled using the flag
     * [ClassList68Api::$show_quick_filter](/Wl/Schedule/ClassList/ClassList68.json).
     *
     *  - Added a filter list of events [ClassList68Api::$a_event](/Wl/Schedule/ClassList/ClassList68.json).
     *  - Added a filter ID of tab [ClassList68Api::$id_class_tab](/Wl/Schedule/ClassList/ClassList68.json).
     *
     * @return ClassList68PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClassList68PostRequest $request): ClassList68PostResponse
    {
        return new ClassList68PostResponse($this->client->request('/Wl/Schedule/ClassList/ClassList68.json', $request->params(), 'POST'));
    }
}
