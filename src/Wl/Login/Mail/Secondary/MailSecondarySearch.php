<?php

namespace WlSdk\Wl\Login\Mail\Secondary;

use WlSdk\WlSdkClient;

/**
 * Searches for secondary recipients within the business by the specified query.
 */
class MailSecondarySearch
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for secondary recipients within the business by the specified query.
     *
     * @return MailSecondarySearchGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MailSecondarySearchGetRequest $request): MailSecondarySearchGetResponse
    {
        return new MailSecondarySearchGetResponse($this->client->request('/Wl/Login/Mail/Secondary/MailSecondarySearch.json', $request->params(), 'GET'));
    }
}
