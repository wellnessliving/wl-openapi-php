<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

/**
 * Response from GET
 */
class ConvertGetResponse
{
    /**
     * Promotion data containing the following structure:.
     *
     * @var ConvertGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    /**
     * The last date on what conversion can be scheduled.
     *
     * @var string|null
     */
    public ?string $dl_convert_max = null;

    /**
     * The first date on what conversion can be scheduled.
     *
     * @var string|null
     */
    public ?string $dl_convert_min = null;

    /**
     * Local date, when hold ends, if PO is on hold right now.
     * Empty if PO is not on hold, or hold is endless.
     *
     * @var string|null
     */
    public ?string $dl_hold_end = null;

    /**
     * Local date, when hold starts, if PO is on hold right now.
     * Empty if PO is not on hold.
     *
     * @var string|null
     */
    public ?string $dl_hold_start = null;

    /**
     * The conversion ID. One of the
     * [PromotionConvertSid](#/components/schemas/Wl.Promotion.Convert.PromotionConvertSid) constants.
     *
     * @var int|null
     */
    public ?int $id_convert = null;

    /**
     * When conversion should be done. One of the
     * [ConvertWhenSid](#/components/schemas/Wl.Login.Promotion.Convert.ConvertWhenSid) constants.
     * 
     * `null` if it's not set yet.
     *
     * @var int|null
     */
    public ?int $id_convert_when = null;

    /**
     * Determines whether the conversion request is new or editing an existing conversion.
     * 
     * If `true`, the conversion exists. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_edit = null;

    /**
     * `true` if PO is going to be renewed and not converted.
     * `false` if PO is going to expire or to convert.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    /**
     * The existing conversion date, returned as a string for the datepicker.
     *
     * @var string|null
     */
    public ?string $s_date_convert = null;

    /**
     * The current date, returned as a string.
     *
     * @var string|null
     */
    public ?string $s_date_now = null;

    /**
     * The Purchase Option title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Expiration date in string user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_date_expire = null;

    /**
     * Next payment date in string user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_date_payment = null;

    /**
     * The note for the promotion conversion.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function __construct(array $data)
    {
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn($item) => new ConvertGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->dl_convert_max = isset($data['dl_convert_max']) ? (string)$data['dl_convert_max'] : null;
        $this->dl_convert_min = isset($data['dl_convert_min']) ? (string)$data['dl_convert_min'] : null;
        $this->dl_hold_end = isset($data['dl_hold_end']) ? (string)$data['dl_hold_end'] : null;
        $this->dl_hold_start = isset($data['dl_hold_start']) ? (string)$data['dl_hold_start'] : null;
        $this->id_convert = isset($data['id_convert']) ? (int)$data['id_convert'] : null;
        $this->id_convert_when = isset($data['id_convert_when']) ? (int)$data['id_convert_when'] : null;
        $this->is_edit = isset($data['is_edit']) ? (bool)$data['is_edit'] : null;
        $this->is_renew = isset($data['is_renew']) ? (bool)$data['is_renew'] : null;
        $this->s_date_convert = isset($data['s_date_convert']) ? (string)$data['s_date_convert'] : null;
        $this->s_date_now = isset($data['s_date_now']) ? (string)$data['s_date_now'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_date_expire = isset($data['text_date_expire']) ? (string)$data['text_date_expire'] : null;
        $this->text_date_payment = isset($data['text_date_payment']) ? (string)$data['text_date_payment'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
    }
}
