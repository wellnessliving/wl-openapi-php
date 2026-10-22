<?php

namespace WlSdk\Wl\Login\Attendance\Row;

class RowGetResponseRow
{
    /**
     * Map of form quiz key to form data. Each value is:
     *
     * @var RowGetResponseRowQuiz|null
     */
    public ?RowGetResponseRowQuiz $a_quiz = null;

    /**
     * Visit date and time in UTC, MySQL format.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Rendered HTML of the client info icon, as shown in the attendance list. Empty string if the visit has no
     * client.
     *
     * @var string|null
     */
    public ?string $html_icon = null;

    /**
     * Rendered HTML of the promotion progress bar, as shown in the attendance list.
     *
     * @var string|null
     */
    public ?string $html_remain = null;

    /**
     * Rendered HTML of the visit note, as shown in the attendance list.
     *
     * @var string|null
     */
    public ?string $html_visit_note = null;

    /**
     * `true` if the business has an active quiz subscription.
     *
     * @var bool|null
     */
    public ?bool $is_quiz_subscription_active = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * String identifier of the attendance list view type. Corresponds to a {@link
     * \WlSdk\Wl\Login\Attendance\Design\ListTypeSid} constant.
     *
     * @var string|null
     */
    public ?string $sid_list_type = null;

    /**
     * Client user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_quiz = isset($data['a_quiz']) ? new RowGetResponseRowQuiz((array)$data['a_quiz']) : null;
        $this->dtu_date = isset($data['dtu_date']) ? (string)$data['dtu_date'] : null;
        $this->html_icon = isset($data['html_icon']) ? (string)$data['html_icon'] : null;
        $this->html_remain = isset($data['html_remain']) ? (string)$data['html_remain'] : null;
        $this->html_visit_note = isset($data['html_visit_note']) ? (string)$data['html_visit_note'] : null;
        $this->is_quiz_subscription_active = isset($data['is_quiz_subscription_active']) ? (bool)$data['is_quiz_subscription_active'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->sid_list_type = isset($data['sid_list_type']) ? (string)$data['sid_list_type'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
