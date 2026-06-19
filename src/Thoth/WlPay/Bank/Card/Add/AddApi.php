<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

use WlSdk\WlSdkClient;

/**
 * Gets code of bank card widget.
 */
class AddApi
{
    /**
     * The business key number used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The payment owner ID. This is different from the user ID. It can be found with
     * the [OwnerApi](/Thoth/WlPay/Owner/Owner.json).
     *
     * @var string|null
     */
    public ?string $k_pay_owner = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_card_detail = null;

    /**
     * Pay bank key to delete.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets code of bank card widget.
     *
     * @deprecated
     *
     * @return AddApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AddApiGetResponse
    {
        return new AddApiGetResponse($this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $this->params(), 'GET'));
    }

    /**
     * Saves new bank card.
     *
     * @return AddApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): AddApiPostResponse
    {
        return new AddApiPostResponse($this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $this->params(), 'POST'));
    }

    /**
     * Deletes saved card.
     *
     * @return AddApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): AddApiDeleteResponse
    {
        return new AddApiDeleteResponse($this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_pay_owner' => $this->k_pay_owner,
            'a_card_detail' => $this->a_card_detail,
            'k_pay_bank' => $this->k_pay_bank,
            ],
            static fn($v) => $v !== null
        );
    }
}
