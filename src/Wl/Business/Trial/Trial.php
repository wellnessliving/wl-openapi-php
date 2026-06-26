<?php

namespace WlSdk\Wl\Business\Trial;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Trial/Trial.json
 */
class Trial
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Business/Trial/Trial.json.
     *
     * @return TrialGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TrialGetRequest $request): TrialGetResponse
    {
        return new TrialGetResponse($this->client->request('/Wl/Business/Trial/Trial.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/Business/Trial/Trial.json.
     *
     * @return TrialPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TrialPostRequest $request): TrialPostResponse
    {
        return new TrialPostResponse($this->client->request('/Wl/Business/Trial/Trial.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Business/Trial/Trial.json.
     *
     * @return TrialDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(TrialDeleteRequest $request): TrialDeleteResponse
    {
        return new TrialDeleteResponse($this->client->request('/Wl/Business/Trial/Trial.json', $request->params(), 'DELETE'));
    }
}
