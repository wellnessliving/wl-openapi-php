<?php
namespace WlSdk\Wl\Profile\Contract;

use WlSdk\WlSdkClient;

/**
 * Returns contract information for the specified purchase option.
 */
class ContractApi
{
    /**
     * The start date of the contract.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * The percentage discount for the item.
     *
     * @var float|null
     */
    public ?float $f_manual_discount = null;

    /**
     * The type of purchase item. This is one of the [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid)
     * constants.
     * Optional if `k_purchase_item` is not empty.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the purchase item in the database.
     * The item key. Depends on `id_purchase_item` property.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The key of the selected location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the selected purchase item.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Amount of a flat manual discount.
     *
     * @var string|null
     */
    public ?string $m_discount_flat = null;

    /**
     * The custom price of the item.
     *
     * @var string|null
     */
    public ?string $m_price_custom = null;

    /**
     * The discount code used for the item.
     *
     * @var string|null
     */
    public ?string $s_discount_code = null;

    /**
     * The key of the current user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * `false` if user has not agreed to use Electronic Signatures,
     * `true` if user has agreed to use Electronic Signatures,
     * `null` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * An encoded version of the client signature.
     * This is different from the signature needed to communicate with an endpoint.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns contract information for the specified purchase option.
     *
     * Renders the contract text for the specified purchase option, applying any applicable
     *  discounts, and returns the content needed to display the contract acceptance modal to the
     *  client.
     *
     * @return ContractApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ContractApiGetResponse
    {
        return new ContractApiGetResponse($this->client->request('/Wl/Profile/Contract/Contract.json', $this->params(), 'GET'));
    }

    /**
     * Completes a sale of a Purchase Option requiring a contract by submitting the signed contract.
     *
     * Accepts an encoded client signature and agreement flag, decodes the signature, and records
     *  the signed contract for the specified purchase item.
     *
     * @return ContractApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ContractApiPostResponse
    {
        return new ContractApiPostResponse($this->client->request('/Wl/Profile/Contract/Contract.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'dt_start' => $this->dt_start,
            'f_manual_discount' => $this->f_manual_discount,
            'id_purchase_item' => $this->id_purchase_item,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'k_purchase_item' => $this->k_purchase_item,
            'm_discount_flat' => $this->m_discount_flat,
            'm_price_custom' => $this->m_price_custom,
            's_discount_code' => $this->s_discount_code,
            'uid' => $this->uid,
            'is_agree' => $this->is_agree,
            's_signature' => $this->s_signature,
            ],
            static fn($v) => $v !== null
        );
    }
}
