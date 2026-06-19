<?php
namespace WlSdk\Wl\Login\Member\DynamicId;

use WlSdk\WlSdkClient;

/**
 * Returns the member's barcode and its expiry time for the specified business and user.
 */
class DynamicIdApi
{
    /**
     * `true` if a new dynamic ID should be generated.
     * `false` if the existing dynamic ID can be used, if it has not expired.
     *   If expired, a new dynamic ID will be generated anyway.
     *
     * @var bool|null
     */
    public ?bool $is_refresh = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User unique identifier.
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
     * Returns the member's barcode and its expiry time for the specified business and user.
     *
     * If the business uses dynamic barcodes, generates or refreshes a time-limited barcode and returns its value,
     * expiry countdown, and an image URL. If the business uses static barcodes, returns the member's static ID
     * with a zero expiry.
     *
     * @return DynamicIdApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): DynamicIdApiGetResponse
    {
        return new DynamicIdApiGetResponse($this->client->request('/Wl/Login/Member/DynamicId/DynamicId.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_refresh' => $this->is_refresh,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
