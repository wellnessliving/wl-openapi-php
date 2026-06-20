<?php

namespace WlSdk\Wl\Book\Process;

use WlSdk\WlSdkClient;

/**
 * Processes the group booking: validates input, collects payment, books sessions, and sends confirmation emails.
 */
class ProcessGroup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Processes the group booking: validates input, collects payment, books sessions, and sends confirmation emails.
     *
     * Accepts a list of clients with their purchase items, resources, sessions, and quiz responses, then validates
     * capacity and eligibility, processes payment for all clients at once, creates booking records, and dispatches
     * confirmation emails. Returns visit keys, activity keys, and purchase activity key upon success.
     *
     * @return ProcessGroupPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProcessGroupPostRequest $request): ProcessGroupPostResponse
    {
        return new ProcessGroupPostResponse($this->client->request('/Wl/Book/Process/ProcessGroup.json', $request->params(), 'POST'));
    }
}
