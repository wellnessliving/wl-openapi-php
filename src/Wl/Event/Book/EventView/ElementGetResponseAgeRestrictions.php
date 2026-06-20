<?php
namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseAgeRestrictions
{
    /**
     * The minimum age for participation in the event.
     * `null` if there's no minimum age set or information isn't available.
     *
     * @var int|null
     */
    public ?int $i_age_from = null;

    /**
     * The age limit for participation in the event.
     *    `null` if there's no age limit set or information isn't available.
     *
     * @var int|null
     */
    public ?int $i_age_to = null;

    /**
     * `true` if age restrictions are public and available, `false` if they're hidden.
     * When restrictions are hidden and the current user isn't a staff member, the age range will be empty.
     *
     * @var bool|null
     */
    public ?bool $is_age_public = null;

    public function __construct(array $data)
    {
        $this->i_age_from = isset($data['i_age_from']) ? (int)$data['i_age_from'] : null;
        $this->i_age_to = isset($data['i_age_to']) ? (int)$data['i_age_to'] : null;
        $this->is_age_public = isset($data['is_age_public']) ? (bool)$data['is_age_public'] : null;
    }
}
