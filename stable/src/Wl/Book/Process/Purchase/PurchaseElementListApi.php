<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns the pricing breakdown for a list of purchase items, applying applicable discounts and taxes.
 */
class PurchaseElementListApi
{
    /**
     * A list of purchase items to get information for. Every element has the next keys:
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item_request = null;

    /**
     * The key of the business in which the purchase is made.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location in which the purchase is made.
     * This is also the booking process location.
     * 
     * This will be `null` if not set yet or if the location can't be defined for some reason.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The discount code.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The key of the user making the purchase.
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
     * Returns the pricing breakdown for a list of purchase items, applying applicable discounts and taxes.
     *
     * Validates the business, location, and user, then for each item in `a_purchase_item_request` computes the
     * price,
     * applicable discount code reduction, login-type discount, and taxes, and returns per-item cost, discount,
     * price, tax, and subtotal amounts in `a_purchase_item_result`.
     *
     * @return PurchaseElementListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PurchaseElementListApiGetResponse
    {
        return new PurchaseElementListApiGetResponse($this->client->request('/Wl/Book/Process/Purchase/PurchaseElementList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_purchase_item_request' => $this->a_purchase_item_request,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
