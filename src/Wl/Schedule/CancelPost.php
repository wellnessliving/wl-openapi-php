<?php
namespace WlSdk\Wl\Schedule;

use WlSdk\WlSdkClient;

/**
 * Cancels session for the client.
 * This method is an alias for partners using the API or SDK.
 */
class CancelPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels session for the client.
This method is an alias for partners using the API or SDK.
     *
     * Identical in behavior to `get()`; exists as a POST alias for partner
     * integrations that cannot issue GET requests.
     *
     * @return CancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CancelPostRequest $request): CancelPostResponse
    {
        return new CancelPostResponse($this->client->request('/Wl/Schedule/Cancel.json', $request->params(), 'POST'));
    }
}
