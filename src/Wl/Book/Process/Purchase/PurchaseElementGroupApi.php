<?php
namespace WlSdk\Wl\Book\Process\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns the pricing breakdown (totals, taxes, and discounts) for the given list of purchase items.
 */
class PurchaseElementGroupApi
{
    /**
     * A list of purchase items. Each item is an associative array with the following keys:
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * Date/time of session is booking.
     * 
     * `null` until initialized.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * The key of the session to check for booking availability.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The key of the location in which the purchase is made.
     * This is also the booking process location.
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
     * The key of the current user.
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
     * Returns the pricing breakdown (totals, taxes, and discounts) for the given list of purchase items.
     *
     * Validates each item in `a_purchase_item` (type, key, installment eligibility, and prize applicability),
     * applies discount codes, login-type discounts, and installment adjustments, then accumulates price, subtotal,
     * discount, tax, and cost totals across all items and returns them as result fields.
     *
     * @return PurchaseElementGroupApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PurchaseElementGroupApiGetResponse
    {
        return new PurchaseElementGroupApiGetResponse($this->client->request('/Wl/Book/Process/Purchase/PurchaseElementGroup.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_purchase_item' => $this->a_purchase_item,
            'dtu_date' => $this->dtu_date,
            'k_class_period' => $this->k_class_period,
            'k_location' => $this->k_location,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
