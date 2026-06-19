<?php
namespace WlSdk\Wl\Business\Select;

use WlSdk\WlSdkClient;

/**
 * Performs checks and generates a list of businesses according to a given configuration.
 */
class BusinessSelectApi
{
    /**
     * Configuration data used to determine the list of businesses returned. This array has the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_config = null;

    /**
     * Business in which a list of business is requested.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User who is requesting the list of businesses.
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
     * Performs checks and generates a list of businesses according to a given configuration.
     *
     * Populates the business-select dropdown widget shown in the backend. Used wherever staff need to
     * switch between businesses they have access to. The returned structure drives the widget directly
     * and includes selection state, visibility flags, and display configuration.
     *
     * @return BusinessSelectApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): BusinessSelectApiGetResponse
    {
        return new BusinessSelectApiGetResponse($this->client->request('/Wl/Business/Select/BusinessSelect.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
