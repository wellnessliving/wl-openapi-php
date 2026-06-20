<?php
namespace WlSdk\Wl\Social\Share;

use WlSdk\WlSdkClient;

/**
 * Saves the share post data and returns the secret key for the shared object.
 */
class SocialShare
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the share post data and returns the secret key for the shared object.
     *
     * Records that the user has shared the specified objects (purchases, bookings, locations, or
     * reviews) to a social network, and returns a secret token that can be appended to the
     * destination URL to deep-link directly to the shared items.
     *
     * @return SocialSharePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SocialSharePostRequest $request): SocialSharePostResponse
    {
        return new SocialSharePostResponse($this->client->request('/Wl/Social/Share/SocialShare.json', $request->params(), 'POST'));
    }
}
