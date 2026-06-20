<?php
namespace WlSdk\Wl\Profile\Activity;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about activity item.
 */
class Element
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about activity item.
     *
     * Loads a single activity record by `k_login_activity`, validates access via profile privileges,
     *  and returns the activity message, icon, type, reward and credit scores, activity dates in UTC
     *  and local time, spend amount, and a share URL.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Profile/Activity/Element.json', $request->params(), 'GET'));
    }
}
