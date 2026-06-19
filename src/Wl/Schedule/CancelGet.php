<?php
namespace WlSdk\Wl\Schedule;

use WlSdk\WlSdkClient;

/**
 * Cancels session for the client.
 */
class CancelGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels session for the client.
     *
     * Cancels the specified appointment or class period for the given user. Staff and admin users
     * may cancel on behalf of any client; regular clients may only cancel their own bookings if
     * the visit is still in a cancellable state. Clears cached schedule data after a successful
     * class period cancellation.
     *
     * @return CancelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CancelGetRequest $request): CancelGetResponse
    {
        return new CancelGetResponse($this->client->request('/Wl/Schedule/Cancel.json', $request->params(), 'GET'));
    }
}
