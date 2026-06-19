<?php
namespace WlSdk\Wl\Book\Process\Guest;

use WlSdk\WlSdkClient;

/**
 * Check if user exists.
 */
class GuestProfileGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Check if user exists.
     *
     * Looks up a guest by email within the specified business and service context. Returns the user key if an
     * existing member is found whose email, birthday (when required), and location eligibility all pass
     * validation.
     *
     * @return GuestProfileGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GuestProfileGetRequest $request): GuestProfileGetResponse
    {
        return new GuestProfileGetResponse($this->client->request('/Wl/Book/Process/Guest/GuestProfile.json', $request->params(), 'GET'));
    }
}
