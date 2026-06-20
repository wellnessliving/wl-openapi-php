<?php
namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseElementGroupGetRequest
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

    public function params(): array
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
