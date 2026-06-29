<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentCancelPutRequest
{
    /**
     * List of users and events to be canceled.
     *
     * Each element has two keys: `uid` and `k_class`.
     *
     * @var array|null
     */
    public ?array $a_event_cancel = null;

    /**
     * Whether upcoming visits should be canceled or not.
     *
     * @var bool|null
     */
    public ?bool $is_cancel_visits = null;

    /**
     * Whether even pass should be deactivated or not.
     *
     * @var bool|null
     */
    public ?bool $is_pass_deactivate = null;

    /**
     * Key of the tuition purchase item. This is enrollment key, which can be got from
     * [TuitionEnrollmentListApi](/Wl/Tuition/Enrollment/TuitionEnrollmentList.json).
     *
     * @var string|null
     */
    public ?string $k_purchase_item_tuition = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_event_cancel' => $this->a_event_cancel,
            'is_cancel_visits' => $this->is_cancel_visits,
            'is_pass_deactivate' => $this->is_pass_deactivate,
            'k_purchase_item_tuition' => $this->k_purchase_item_tuition,
            ],
            static fn ($v) => $v !== null
        );
    }
}
