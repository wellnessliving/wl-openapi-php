<?php
namespace WlSdk\Wl\Profile\Attendance\Schedule\Frontend;

use WlSdk\WlSdkClient;

/**
 * Retrieves lifetime visit totals.
 */
class LifetimeTotalsApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user key.
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
     * Retrieves lifetime visit totals.
     *
     * Returns aggregated lifetime attendance statistics for the specified user in the given
     *  business. Used to display summary visit counts and related metrics on the client profile
     *  schedule page.
     *
     * @return LifetimeTotalsApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LifetimeTotalsApiGetResponse
    {
        return new LifetimeTotalsApiGetResponse($this->client->request('/Wl/Profile/Attendance/Schedule/Frontend/LifetimeTotals.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
