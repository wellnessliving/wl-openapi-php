<?php
namespace WlSdk\Wl\Book\Process;

use WlSdk\WlSdkClient;

/**
 * Returns the booking wizard steps, adjusting the path when the service is already booked for a family member.
 */
class Process59
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the booking wizard steps, adjusting the path when the service is already booked for a family member.
     *
     * Delegates to the parent implementation and then, when family-relation booking is enabled and the service is
     * already booked for the selected relative, trims the wizard path down to only the relation and detail steps.
     *
     * @return Process59GetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(Process59GetRequest $request): Process59GetResponse
    {
        return new Process59GetResponse($this->client->request('/Wl/Book/Process/Process59.json', $request->params(), 'GET'));
    }
}
