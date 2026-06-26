<?php

namespace WlSdk\Wl\Profile\Merge;

use WlSdk\WlSdkClient;

/**
 * Executes merging of clients.
 */
class ProfileMerge
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Executes merging of clients.
     *
     * @return ProfileMergePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProfileMergePostRequest $request): ProfileMergePostResponse
    {
        return new ProfileMergePostResponse($this->client->request('/Wl/Profile/Merge/ProfileMerge.json', $request->params(), 'POST'));
    }
}
