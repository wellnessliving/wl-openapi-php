<?php
namespace WlSdk\Wl\Schedule;

class CancelPostRequest
{
    /**
     * The date of the session in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * This will be `true` if the API is being used from the back end. Otherwise, this will be `false`.
     * Here, the back end refers to either a staff member or admin from the side of the business.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` is late cancel, `false` reservation is not late cancel.
     * This is required to enable late cancel even if the user is staff.
     *
     * @var bool|null
     */
    public ?bool $is_late_cancel = null;

    /**
     * The appointment key.
     * This will be `null` if not set yet or if a class or event is canceled.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of the business within which the action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     * This will be `null` if not set yet or if an appointment is canceled.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'is_backend' => $this->is_backend,
            'is_late_cancel' => $this->is_late_cancel,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
