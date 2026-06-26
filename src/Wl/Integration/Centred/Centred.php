<?php

namespace WlSdk\Wl\Integration\Centred;

use WlSdk\WlSdkClient;

/**
 * Gets studio ID for business.
 */
class Centred
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets studio ID for business.
     *
     * @return CentredGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CentredGetRequest $request): CentredGetResponse
    {
        return new CentredGetResponse($this->client->request('/Wl/Integration/Centred/Centred.json', $request->params(), 'GET'));
    }

    /**
     * On API request save value to database.
     *
     * @return CentredPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CentredPostRequest $request): CentredPostResponse
    {
        return new CentredPostResponse($this->client->request('/Wl/Integration/Centred/Centred.json', $request->params(), 'POST'));
    }

    /**
     * Removes records from the database.
     *
     * @return CentredDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(CentredDeleteRequest $request): CentredDeleteResponse
    {
        return new CentredDeleteResponse($this->client->request('/Wl/Integration/Centred/Centred.json', $request->params(), 'DELETE'));
    }
}
