<?php

namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Gets user's attached files.
 */
class ProfileAttach
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets user's attached files.
     *
     * @return ProfileAttachGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProfileAttachGetRequest $request): ProfileAttachGetResponse
    {
        return new ProfileAttachGetResponse($this->client->request('/Wl/Profile/Attach/ProfileAttach.json', $request->params(), 'GET'));
    }

    /**
     * Saves user's attaches.
     *
     * @return ProfileAttachPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProfileAttachPostRequest $request): ProfileAttachPostResponse
    {
        return new ProfileAttachPostResponse($this->client->request('/Wl/Profile/Attach/ProfileAttach.json', $request->params(), 'POST'));
    }
}
