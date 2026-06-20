<?php
namespace WlSdk\Wl\Login\Promotion;

class PromotionPayPauseGetResponsePayPauseList
{
    /**
     * Date when this hold period was created. `null` for old records.
     *
     * @var string|null
     */
    public ?string $dl_create = null;

    /**
     * Ending date of the pause (inclusively - this date is paused).
     * This field contains zero date for promotions placed on hold indefinitely.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Starting date of the pause (inclusively - this date is paused).
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Duration of the hold in days. `null` if the hold is ongoing.
     *
     * @var int|null
     */
    public ?int $i_hold_day = null;

    /**
     * Whether the hold is in past.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    /**
     * Key of the hold period.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    /**
     * Additional notes.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Full name of a user that has created hold period. `null` for old records.
     *
     * @var string|null
     */
    public ?string $text_user_create = null;

    /**
     * Key of a user that has created hold period. `null` for old records.
     *
     * @var string|null
     */
    public ?string $uid_create = null;

    public function __construct(array $data)
    {
        $this->dl_create = isset($data['dl_create']) ? (string)$data['dl_create'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->i_hold_day = isset($data['i_hold_day']) ? (int)$data['i_hold_day'] : null;
        $this->is_past = isset($data['is_past']) ? (bool)$data['is_past'] : null;
        $this->k_promotion_pay_pause = isset($data['k_promotion_pay_pause']) ? (string)$data['k_promotion_pay_pause'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_user_create = isset($data['text_user_create']) ? (string)$data['text_user_create'] : null;
        $this->uid_create = isset($data['uid_create']) ? (string)$data['uid_create'] : null;
    }
}
