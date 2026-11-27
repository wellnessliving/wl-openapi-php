<?php

namespace WlSdk\Wl\Classes\Period\Staff;

/**
 * Response from POST
 */
class SubstitutePostResponse
{
    /**
     * Keys of the class periods that the call created or changed.
     *
     * The first key is {@link \WlSdk\Wl\Classes\Period\Staff\Substitute}, which holds only the given session after
     * the call. The
     * other keys are the class periods that the call created for the sessions of the series before and after the
     * given session, where there are such sessions. Empty if the call changed nothing.
     *
     * @var string[]|null
     */
    public ?array $a_class_period = null;

    /**
     * The instructors of the session.
     *
     * In the request, the full list of the instructors that the session must have: an instructor of the session
     * who is
     * not in the list is removed from the session. In the result, the instructors of the session after the call.
     *
     * Each element has the following structure:
     *
     * @var SubstitutePostResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * Whether the call changed the instructors of the session.
     *
     * `true` if the instructors were changed, `false` if the session already had the given instructors with the
     * given
     * pay rates.
     *
     * @var bool|null
     */
    public ?bool $is_change = null;

    public function __construct(array $data)
    {
        $this->a_class_period = isset($data['a_class_period']) ? (array)$data['a_class_period'] : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new SubstitutePostResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->is_change = isset($data['is_change']) ? (bool)$data['is_change'] : null;
    }
}
