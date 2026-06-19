<?php
namespace WlSdk\Wl\Profile\Activity;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of activity items to show in user profile.
 */
class ListApi
{
    /**
     * Ending date of the date range. Optional.
     * 
     * This is local business timezone date. This day is included in the result.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Starting date of the date range. Optional.
     * 
     *  This is local business timezone date. This day is included in the result.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the client to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of activity items to show in user profile.
     *
     * Returns the client's activity history for the specified business, filtered by an optional
     *  date range. Requires profile-view access and respects activity-type visibility rules for the
     *  requesting user.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Profile/Activity/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
