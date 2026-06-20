<?php
namespace WlSdk\Wl\Reception\Application;

class ReceptionSchedulePostResponseConfirmationDataPayment
{
    /**
     * Calendar restrictions. A duration pass will only have elements if a restriction has been met. This contains:
     *
     * @var ReceptionSchedulePostResponseConfirmationDataPaymentRestrict|null
     */
    public ?ReceptionSchedulePostResponseConfirmationDataPaymentRestrict $a_restrict = null;

    /**
     * If `true`, the promotion was renewed in the past. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $has_visit_past = null;

    /**
     * If `true`, additional info should be excluded. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $hide_visit_additional_info = null;

    /**
     * The count of upcoming uses of the promotion.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * Number of minutes used for upcoming visits.
     *   Has sense only for promotions of program type
     * [RsProgramTypeSid::DURATION](#/components/schemas/RsProgramTypeSid).
     *
     * @var int|null
     */
    public ?int $i_book_duration = null;

    /**
     * The promotion's visit count limit.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The remaining count of visits.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * Number of minutes left in this promotion.
     *   Has sense only for promotions of program type
     * [RsProgramTypeSid::DURATION](#/components/schemas/RsProgramTypeSid).
     *
     * @var int|null
     */
    public ?int $i_remain_duration = null;

    /**
     * Count of held uses in the pass.
     *
     * @var int|null
     */
    public ?int $i_use = null;

    /**
     * Number of minutes used for past visits by this promotion.
     *   Has sense only for promotions of program type
     * [RsProgramTypeSid::DURATION](#/components/schemas/RsProgramTypeSid).
     *
     * @var int|null
     */
    public ?int $i_use_duration = null;

    /**
     * The count of attended sessions before the last renewal.
     *   If `0`, there were no sessions before last renewal or the promotion doesn't auto-renew.
     *
     * @var int|null
     */
    public ?int $i_visit_past = null;

    /**
     * The promotion's program type ID. One of [RsProgramTypeSid](#/components/schemas/RsProgramTypeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_program_type = null;

    /**
     * If `true`, the promotion has a usage limit and no remaining visits. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_last_use = null;

    /**
     * If `true`, the promotion is a package. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_package = null;

    /**
     * If `true`, there's more than one calendar restriction on the pass. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_restrict_multiply = null;

    /**
     * The login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The formatted remaining duration on the promotion.
     *
     * @var string|null
     */
    public ?string $s_remain_measure = null;

    /**
     * If `true`, there's a rollover on the pass with calendar restrictions. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $show_remain = null;

    /**
     * The promotion's program type SID.
     *
     * @var string|null
     */
    public ?string $sid_program_type = null;

    public function __construct(array $data)
    {
        $this->a_restrict = isset($data['a_restrict']) ? new ReceptionSchedulePostResponseConfirmationDataPaymentRestrict((array)$data['a_restrict']) : null;
        $this->has_visit_past = isset($data['has_visit_past']) ? (bool)$data['has_visit_past'] : null;
        $this->hide_visit_additional_info = isset($data['hide_visit_additional_info']) ? (bool)$data['hide_visit_additional_info'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_book_duration = isset($data['i_book_duration']) ? (int)$data['i_book_duration'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->i_remain_duration = isset($data['i_remain_duration']) ? (int)$data['i_remain_duration'] : null;
        $this->i_use = isset($data['i_use']) ? (int)$data['i_use'] : null;
        $this->i_use_duration = isset($data['i_use_duration']) ? (int)$data['i_use_duration'] : null;
        $this->i_visit_past = isset($data['i_visit_past']) ? (int)$data['i_visit_past'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->is_last_use = isset($data['is_last_use']) ? (bool)$data['is_last_use'] : null;
        $this->is_package = isset($data['is_package']) ? (bool)$data['is_package'] : null;
        $this->is_restrict_multiply = isset($data['is_restrict_multiply']) ? (bool)$data['is_restrict_multiply'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->s_remain_measure = isset($data['s_remain_measure']) ? (string)$data['s_remain_measure'] : null;
        $this->show_remain = isset($data['show_remain']) ? (bool)$data['show_remain'] : null;
        $this->sid_program_type = isset($data['sid_program_type']) ? (string)$data['sid_program_type'] : null;
    }
}
