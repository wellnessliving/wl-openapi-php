<?php
namespace WlSdk\Wl\Profile\Activity;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about activity item.
 */
class ElementApi
{
    /**
     * The key of the activity item represented by this endpoint.
     *
     * @var string|null
     */
    public ?string $k_login_activity = null;

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
     * @return ElementApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ElementApiGetResponse
    {
        return new ElementApiGetResponse($this->client->request('/Wl/Profile/Activity/Element.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_login_activity' => $this->k_login_activity,
            ],
            static fn($v) => $v !== null
        );
    }
}
