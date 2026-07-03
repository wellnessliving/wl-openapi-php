<?php

namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewPostRequest
{
    /**
     * A list of sessions to get information for. Every element has the following keys:
     *
     *
     * `null` if requesting a single session.
     *
     * @var array[]|null
     */
    public ?array $a_session_request = null;

    /**
     * The date/time of the session.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Key of the business in which the action is performed.
     *
     * `null` if key of the business was not passed.
     *
     * Key of the business is required if [ClassViewApi](/Wl/Schedule/ClassView/ClassView.json) was passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
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

    /**
     * A list of sessions to get information for.
     * A serialized array. See [ClassViewApi](/Wl/Schedule/ClassView/ClassView.json) for the array structure.
     * Serialization and sending by POST is necessary to send big lists.
     *
     * @var string|null
     */
    public ?string $s_session_request = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_session_request' => $this->a_session_request,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid' => $this->uid,
            's_session_request' => $this->s_session_request,
            ],
            static fn ($v) => $v !== null
        );
    }
}
