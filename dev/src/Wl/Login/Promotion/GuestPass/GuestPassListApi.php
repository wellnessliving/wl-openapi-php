<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves guest passes for a specific client.
 */
class GuestPassListApi
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class key to filter guest passes by.
     * 
     * `null` if guest passes should not be filtered by class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Location key to filter guest passes by.
     * 
     * `null` if guest passes should not be filtered by location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * User key.
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
     * Retrieves guest passes for a specific client.
     *
     * Returns all guest passes assigned to the given user, optionally filtered by class and location.
     *
     * @return GuestPassListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): GuestPassListApiGetResponse
    {
        return new GuestPassListApiGetResponse($this->client->request('/Wl/Login/Promotion/GuestPass/GuestPassList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
