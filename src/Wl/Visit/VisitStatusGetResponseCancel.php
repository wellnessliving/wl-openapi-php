<?php
namespace WlSdk\Wl\Visit;

class VisitStatusGetResponseCancel
{
    /**
     * `null` if penalty must be not applied.
     *
     * @var VisitStatusGetResponseCancelPenalty|null
     */
    public ?VisitStatusGetResponseCancelPenalty $a_penalty = null;

    /**
     * `true` if the booking can be canceled online by the specified user, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_cancel = null;

    /**
     * `true` if the client's account will be flagged instead of charging a monetary fee, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    /**
     * `true` if the cancellation would be considered a late cancel, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_late = null;

    /**
     * `true` if the visit credit (from the purchase option used to book) will be returned
     *    to the user's profile after cancellation, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_refund = null;

    public function __construct(array $data)
    {
        $this->a_penalty = isset($data['a_penalty']) ? new VisitStatusGetResponseCancelPenalty((array)$data['a_penalty']) : null;
        $this->can_cancel = isset($data['can_cancel']) ? (bool)$data['can_cancel'] : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
        $this->is_late = isset($data['is_late']) ? (bool)$data['is_late'] : null;
        $this->is_refund = isset($data['is_refund']) ? (bool)$data['is_refund'] : null;
    }
}
