<?php
namespace WlSdk\Thoth\WlPay\Bank\Card;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user's bank cards.
 */
class ListApi
{
    /**
     * ID of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location to show information for.
     * 
     * `0` to use user's home location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * ID of a user to show information for.
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
     * Retrieves information about user's bank cards.
     *
     * Returns the list of saved payment cards for the specified user and business, including card number fragment,
     * expiry date, card system, holder name, and default status. Also returns whether new cards can be added.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Thoth/WlPay/Bank/Card/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
