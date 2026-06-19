<?php
namespace WlSdk\Thoth\WlPay\Address;

use WlSdk\WlSdkClient;

/**
 * Gets user's payment addresses information.
 */
class AddressApi
{
    /**
     * The ID of the payment owner type.
     * One of [RsPayOwnerSid](#/components/schemas/RsPayOwnerSid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay_owner = null;

    /**
     * Business key, where the payment is performed.
     * `null` if pay owner is not user.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The primary key of a payment owner.
     * This could be the business of the user depending on a [AddressApi](/Thoth/WlPay/Address/Address.json) value.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets user's payment addresses information.
     *
     * @return AddressApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AddressApiGetResponse
    {
        return new AddressApiGetResponse($this->client->request('/Thoth/WlPay/Address/Address.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_pay_owner' => $this->id_pay_owner,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            ],
            static fn($v) => $v !== null
        );
    }
}
