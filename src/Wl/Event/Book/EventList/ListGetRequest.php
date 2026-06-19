<?php
namespace WlSdk\Wl\Event\Book\EventList;

class ListGetRequest
{
    /**
     * Defines how the event availability flag filter should be applied.
     * 
     * One of [AFlagSid](#/components/schemas/AFlagSid) constants.
     * 
     * * [AFlagSid::ON](#/components/schemas/AFlagSid) to show only available events.
     * * [AFlagSid::OFF](#/components/schemas/AFlagSid) to show only unavailable events.
     * * [AFlagSid::ALL](#/components/schemas/AFlagSid) to show all events (available and unavailable).
     *
     * @var int|null
     */
    public ?int $id_status = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the category tab.
     * If empty, select only elements with not specified book tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_status' => $this->id_status,
            'k_business' => $this->k_business,
            'k_class_tab' => $this->k_class_tab,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
