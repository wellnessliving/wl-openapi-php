<?php
namespace WlSdk\Wl\Announcement;

class AnnouncementListGetRequest
{
    /**
     * Order ID for list of announcements.
     * 
     * Used only when `is_backend` is `true`.
     * 
     * `null` in case when use default order.
     *
     * @var \WlSdk\Core\Sid\SortOrderSid|null
     */
    public ?\WlSdk\Core\Sid\SortOrderSid $id_order = null;

    /**
     * Sort field ID for list of announcements.
     * 
     * Used only when `is_backend` is `true`.
     * 
     * `null` in case when use default field.
     *
     * @var \WlSdk\Wl\Announcement\SortFieldSid|null
     */
    public ?\WlSdk\Wl\Announcement\SortFieldSid $id_sort_field = null;

    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key for which need show announcement.
     * 
     * `null` in case when need show location for all locations in business.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The filter phrase to filter announcements by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_order' => $this->id_order?->value,
            'id_sort_field' => $this->id_sort_field?->value,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_search' => $this->text_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
