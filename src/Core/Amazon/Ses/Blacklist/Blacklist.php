<?php

namespace WlSdk\Core\Amazon\Ses\Blacklist;

use WlSdk\WlSdkClient;

/**
 * Checks if an email address is on the Amazon Ses blacklist.
 */
class Blacklist
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if an email address is on the Amazon Ses blacklist.
     *
     * @return BlacklistGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BlacklistGetRequest $request): BlacklistGetResponse
    {
        return new BlacklistGetResponse($this->client->request('/Core/Amazon/Ses/Blacklist/Blacklist.json', $request->params(), 'GET'));
    }

    /**
     * Removes an email address from the Amazon Ses blacklist.
     *
     * @return BlacklistDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BlacklistDeleteRequest $request): BlacklistDeleteResponse
    {
        return new BlacklistDeleteResponse($this->client->request('/Core/Amazon/Ses/Blacklist/Blacklist.json', $request->params(), 'DELETE'));
    }
}
