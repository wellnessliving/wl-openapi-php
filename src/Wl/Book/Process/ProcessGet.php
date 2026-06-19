<?php
namespace WlSdk\Wl\Book\Process;

use WlSdk\WlSdkClient;

/**
 * Returns the ordered list of booking wizard steps for the given session and client.
 *
 * @deprecated
 */
class ProcessGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the ordered list of booking wizard steps for the given session and client.
     *
     * Evaluates the session, user profile, payment requirements, asset selection, and subscription state to build
     * an ordered list of steps the client must complete to finish the booking. The first step in the list is
     * marked
     * as current, and additional flags about event type, wait-list availability, and payment options are returned.
     *
     * @return ProcessGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProcessGetRequest $request): ProcessGetResponse
    {
        return new ProcessGetResponse($this->client->request('/Wl/Book/Process/Process.json', $request->params(), 'GET'));
    }
}
