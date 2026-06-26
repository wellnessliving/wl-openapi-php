<?php

namespace WlSdk\Wl\Business\Location\Merchant\Share;

use WlSdk\WlSdkClient;

/**
 * Saves information about merchant sharing between locations.
 */
class Save
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves information about merchant sharing between locations.
     *
     * @return SavePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SavePostRequest $request): SavePostResponse
    {
        return new SavePostResponse($this->client->request('/Wl/Business/Location/Merchant/Share/Save.json', $request->params(), 'POST'));
    }
}
