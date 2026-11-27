<?php

namespace WlSdk\Wl\Classes\Period\Staff;

class SubstitutePostRequest
{
    /**
     * The instructors of the session.
     *
     * In the request, the full list of the instructors that the session must have: an instructor of the session
     * who is
     * not in the list is removed from the session. In the result, the instructors of the session after the call.
     *
     * Each element has the following structure:
     *
     * @var array[]|null
     */
    public ?array $a_staff = null;

    /**
     * Local date and start time of one session of the series in MySQL format, for example `2026-12-03 14:00:00`.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the class period of the session.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_staff' => $this->a_staff,
            'dt_date_local' => $this->dt_date_local,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            ],
            static fn ($v) => $v !== null
        );
    }
}
