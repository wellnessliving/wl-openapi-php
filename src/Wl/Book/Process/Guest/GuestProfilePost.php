<?php
namespace WlSdk\Wl\Book\Process\Guest;

use WlSdk\WlSdkClient;

/**
 * Creates new user.
 */
class GuestProfilePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates new user.
     *
     * Creates a new guest profile (or reuses an existing non-member account) for the specified business and
     * service,
     * applying birthday and virtual-account rules, and returns the UID of the created or matched user.
     *
     * @return GuestProfilePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GuestProfilePostRequest $request): GuestProfilePostResponse
    {
        return new GuestProfilePostResponse($this->client->request('/Wl/Book/Process/Guest/GuestProfile.json', $request->params(), 'POST'));
    }
}
