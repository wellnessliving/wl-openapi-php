<?php
namespace WlSdk\Wl\Member\Purchase;

class MemberByPromotionGetResponseClientsPurchaseOptions
{
    /**
     * The date in the location time zone when the Purchase Option expires.
     *   This will be `null` if the Purchase Option doesn't expire.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The global date and time when the Purchase Option was sold.
     *
     * @var string|null
     */
    public ?string $dtu_purchase = null;

    /**
     * The date in location's time zone when the Purchase Option starts.
     *   This will be `null` if not defined yet. For example, if the starting date is the date of the first visit
     *   and there haven't been any visits yet.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The date in location time zone when the Purchase Option will be terminated.
     *   This will be `null` if the Purchase Option isn't scheduled to be terminated.
     *
     * @var string|null
     */
    public ?string $dl_terminate = null;

    /**
     * The key of the Purchase Option.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    public function __construct(array $data)
    {
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dtu_purchase = isset($data['dtu_purchase']) ? (string)$data['dtu_purchase'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->dl_terminate = isset($data['dl_terminate']) ? (string)$data['dl_terminate'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
    }
}
