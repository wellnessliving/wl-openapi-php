<?php
namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Completes the appointment booking and logs variable counts for diagnostic purposes.
 */
class Finish47Post
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Completes the appointment booking and logs variable counts for diagnostic purposes.
     *
     * Delegates to the parent `post()` implementation after logging the total variable counts
     *  from GET, POST, and the booking data array. The logging is temporary and intended to diagnose
     *  "Too many variables" errors in production.
     *
     * @return Finish47PostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(Finish47PostRequest $request): Finish47PostResponse
    {
        return new Finish47PostResponse($this->client->request('/Wl/Appointment/Book/Finish/Finish47.json', $request->params(), 'POST'));
    }
}
