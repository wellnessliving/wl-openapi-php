<?php

namespace WlSdk\Wl\Page\BackAdmin;

use WlSdk\WlSdkClient;

/**
 * Switches administrator back to his administrator account when he signed in as a different user.
 */
class BackAdmin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Switches administrator back to his administrator account when he signed in as a different user.
     *
     * @return BackAdminPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BackAdminPostRequest $request): BackAdminPostResponse
    {
        return new BackAdminPostResponse($this->client->request('/Wl/Page/BackAdmin/BackAdmin.json', $request->params(), 'POST'));
    }
}
