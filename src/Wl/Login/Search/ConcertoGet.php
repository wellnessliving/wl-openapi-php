<?php
namespace WlSdk\Wl\Login\Search;

use WlSdk\WlSdkClient;

/**
 * Finds a user by their email or phone within the specified business.
 */
class ConcertoGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finds a user by their email or phone within the specified business.
     *
     * Accepts exactly one of `text_mail` or `text_phone`, validates the value, and returns the user key if a
     * matching
     * active member of the business is found. Returns an error if the user is not found or if multiple users share
     * the given phone number.
     *
     * @return ConcertoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ConcertoGetRequest $request): ConcertoGetResponse
    {
        return new ConcertoGetResponse($this->client->request('/Wl/Login/Search/Concerto.json', $request->params(), 'GET'));
    }
}
