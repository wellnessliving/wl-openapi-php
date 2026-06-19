<?php
namespace WlSdk\Wl\Business\Search;

use WlSdk\WlSdkClient;

/**
 * Searches for businesses by name and email address and returns matching business keys.
 */
class BusinessSearchUserGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for businesses by name and email address and returns matching business keys.
     *
     * Used to locate a specific business for a given client, for example during a password reset or
     * membership lookup. Returns only businesses where the email belongs to a registered member, so
     * a match confirms the client actually has an account at that business.
     *
     * @return BusinessSearchUserGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessSearchUserGetRequest $request): BusinessSearchUserGetResponse
    {
        return new BusinessSearchUserGetResponse($this->client->request('/Wl/Business/Search/BusinessSearchUser.json', $request->params(), 'GET'));
    }
}
