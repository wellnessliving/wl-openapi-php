<?php

namespace WlSdk\Wl\Announcement;

/**
 * Response from GET
 */
class AnnouncementListGetResponse
{
    /**
     * List of announcements. Each element has the following keys:
     *
     * @var AnnouncementListGetResponseList[]|null
     */
    public ?array $a_list = null;

    /**
     * Order ID for list of announcements.
     *
     * Used only when {@link \WlSdk\Wl\Announcement\AnnouncementList} is `true`.
     *
     * `null` in case when use default order.
     *
     * @var int|null
     * @see \WlSdk\Core\Sid\SortOrderSid
     */
    public ?int $id_order = null;

    /**
     * Sort field ID for list of announcements.
     *
     * Used only when {@link \WlSdk\Wl\Announcement\AnnouncementList} is `true`.
     *
     * `null` in case when use default field.
     *
     * @var int|null
     * @see \WlSdk\Wl\Announcement\SortFieldSid
     */
    public ?int $id_sort_field = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new AnnouncementListGetResponseList((array)$item), (array)$data['a_list']) : null;
        $this->id_order = isset($data['id_order']) ? (int)$data['id_order'] : null;
        $this->id_sort_field = isset($data['id_sort_field']) ? (int)$data['id_sort_field'] : null;
    }
}
