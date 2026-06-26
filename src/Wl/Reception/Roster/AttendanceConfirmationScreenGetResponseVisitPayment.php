<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceConfirmationScreenGetResponseVisitPayment
{
    /**
     * Logo of the promotion.
     *
     * @var AttendanceConfirmationScreenGetResponseVisitPaymentImage|null
     */
    public ?AttendanceConfirmationScreenGetResponseVisitPaymentImage $a_image = null;

    /**
     * The list of assets reserved individually at the time of booking containing:
     *
     * @var AttendanceConfirmationScreenGetResponseVisitPaymentResourcesNotShared|null
     */
    public ?AttendanceConfirmationScreenGetResponseVisitPaymentResourcesNotShared $a_resources_not_shared = null;

    /**
     * Information about calendar restrictions.
     *
     * @var AttendanceConfirmationScreenGetResponseVisitPaymentRestrict|null
     */
    public ?AttendanceConfirmationScreenGetResponseVisitPaymentRestrict $a_restrict = null;

    /**
     * Message about expiration date of the promotion.
     *
     * @var string|null
     */
    public ?string $html_expire = null;

    /**
     * Count of future books that are paid with this promotion.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * Limit on the visit count of the promotion.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Remaining count of visits.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * Count of usage of the promotion.
     *
     * @var int|null
     */
    public ?int $i_use = null;

    /**
     * Count of attended sessions before last renew.
     * `0` if there are no sessions before last renew or promotion is not auto-renew.
     *
     * @var int|null
     */
    public ?int $i_visit_past = null;

    /**
     * If `true`, the promotion has a usage limit and no remaining visits. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_last_use = null;

    /**
     * Date, when PO is going to be renewed. Empty, if it's not going.
     *
     * @var string|null
     */
    public ?string $text_renew = null;

    /**
     * Message about expiration date of the promotion.
     *
     * @var string|null
     */
    public ?string $s_expire = null;

    /**
     * Start date if promotion has not started yet.
     *  If the promotion has already started, the field is not presented.
     *
     * @var string|null
     */
    public ?string $s_start = null;

    /**
     * Name of the promotion.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Promotion owner. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new AttendanceConfirmationScreenGetResponseVisitPaymentImage((array)$data['a_image']) : null;
        $this->a_resources_not_shared = isset($data['a_resources_not_shared']) ? new AttendanceConfirmationScreenGetResponseVisitPaymentResourcesNotShared((array)$data['a_resources_not_shared']) : null;
        $this->a_restrict = isset($data['a_restrict']) ? new AttendanceConfirmationScreenGetResponseVisitPaymentRestrict((array)$data['a_restrict']) : null;
        $this->html_expire = isset($data['html_expire']) ? (string)$data['html_expire'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->i_use = isset($data['i_use']) ? (int)$data['i_use'] : null;
        $this->i_visit_past = isset($data['i_visit_past']) ? (int)$data['i_visit_past'] : null;
        $this->is_last_use = isset($data['is_last_use']) ? (bool)$data['is_last_use'] : null;
        $this->text_renew = isset($data['text_renew']) ? (string)$data['text_renew'] : null;
        $this->s_expire = isset($data['s_expire']) ? (string)$data['s_expire'] : null;
        $this->s_start = isset($data['s_start']) ? (string)$data['s_start'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
