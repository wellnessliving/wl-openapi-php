<?php

namespace WlSdk\Wl\Book\Process\Info;

/**
 * Response from POST
 */
class Info54PostResponse
{
    /**
     * The keys of users' activity.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity = null;

    /**
     * The keys of the bookings made.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * Values are arrays with next keys:
     *
     * @var Info54PostResponseVisitPayment[]|null
     */
    public ?array $a_visit_payment = null;

    /**
     * If client must authorize credit card.
     *
     * @var bool|null
     */
    public ?bool $is_card_authorize = null;

    /**
     * Can the class/event be booked immediately or not.
     *
     * The verification is based on the search for client's promotions and other features of the class/event.
     * But it does not take into account the presence of other mandatory steps.
     * Their presence will be indicated by the [InfoApi::$is_next](/Wl/Book/Process/Info/Info.json) flag.
     *
     * @var bool|null
     */
    public ?bool $is_force_book = null;

    /**
     * `true` - next steps of the wizard are needed (for example, to purchase something to book the selected
     * session).
     * `false` - no need for next steps (all that's needed has already been purchased).
     *
     * @var bool|null
     */
    public ?bool $is_next = null;

    public function __construct(array $data)
    {
        $this->a_login_activity = isset($data['a_login_activity']) ? (array)$data['a_login_activity'] : null;
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->a_visit_payment = isset($data['a_visit_payment']) ? array_map(static fn ($item) => new Info54PostResponseVisitPayment((array)$item), (array)$data['a_visit_payment']) : null;
        $this->is_card_authorize = isset($data['is_card_authorize']) ? (bool)$data['is_card_authorize'] : null;
        $this->is_force_book = isset($data['is_force_book']) ? (bool)$data['is_force_book'] : null;
        $this->is_next = isset($data['is_next']) ? (bool)$data['is_next'] : null;
    }
}
