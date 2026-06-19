<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves guest passes for a specific client.
 */
class GuestPassList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves guest passes for a specific client.
     *
     * Returns all guest passes assigned to the given user, optionally filtered by class and location.
     *
     * @return GuestPassListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GuestPassListGetRequest $request): GuestPassListGetResponse
    {
        return new GuestPassListGetResponse($this->client->request('/Wl/Login/Promotion/GuestPass/GuestPassList.json', $request->params(), 'GET'));
    }
}
