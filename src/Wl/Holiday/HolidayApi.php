<?php
namespace WlSdk\Wl\Holiday;

use WlSdk\WlSdkClient;

/**
 * Returns information about holiday day of business/locations.
 */
class HolidayApi
{
    /**
     * The date working hours are required for.
     * Set in the business's timezone.
     *
     * @var string|null
     */
    public ?string $dl_work = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about holiday day of business/locations.
     *
     * For the specified business and date, returns whether that date is a business-wide closed day, the closed day
     * title if applicable, and a map of location keys to their closed day titles for any locations also closed on
     * that date.
     *
     * @return HolidayApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): HolidayApiGetResponse
    {
        return new HolidayApiGetResponse($this->client->request('/Wl/Holiday/Holiday.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dl_work' => $this->dl_work,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
