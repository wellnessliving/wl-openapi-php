<?php
namespace WlSdk\Wl\Reception\Design;

use WlSdk\WlSdkClient;

/**
 * Returns information about settings for Check In Web Application.
 */
class ReceptionDesignApi
{
    /**
     * Key of the business, where application is run.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location, where application is run.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about settings for Check In Web Application.
     *
     * This method does not require any access checks, because this is public information.
     *
     * @return ReceptionDesignApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ReceptionDesignApiGetResponse
    {
        return new ReceptionDesignApiGetResponse($this->client->request('/Wl/Reception/Design/ReceptionDesign.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
