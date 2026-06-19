<?php
namespace WlSdk\Wl\Appointment\Book\Payment;

/**
 * Response from GET
 */
class PaymentPostApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_promotion_data = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_purchase = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Gift card amount.
     *
     * @var string|null
     */
    public ?string $m_coupon = null;

    /**
     * Discount amount.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * Surcharge amount calculated for credit cards (Virtual Terminal and Card Swiper).
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * Surcharge amount calculated for money transfers from account: ACH, Direct Entry.
     *
     * @var string|null
     */
    public ?string $m_surcharge_ach = null;

    /**
     * The tax of service.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * The total cost of the purchase.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    public function __construct(array $data)
    {
        $this->a_promotion_data = isset($data['a_promotion_data']) ? (array)$data['a_promotion_data'] : null;
        $this->a_purchase = isset($data['a_purchase']) ? (array)$data['a_purchase'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->m_coupon = isset($data['m_coupon']) ? (string)$data['m_coupon'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->m_surcharge_ach = isset($data['m_surcharge_ach']) ? (string)$data['m_surcharge_ach'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
