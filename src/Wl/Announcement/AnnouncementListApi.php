<?php
namespace WlSdk\Wl\Announcement;

use WlSdk\WlSdkClient;

/**
 * Returns a list of announcements for the given business and location.
 */
class AnnouncementListApi
{
    /**
     * Order ID for list of announcements.
     * 
     * Used only when `is_backend` is `true`.
     * 
     * `null` in case when use default order.
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * Sort field ID for list of announcements.
     * 
     * Used only when `is_backend` is `true`.
     * 
     * `null` in case when use default field.
     *
     * @var int|null
     */
    public ?int $id_sort_field = null;

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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of announcements for the given business and location.
     *
     * Retrieves published announcements visible to the current user, optionally filtered to a single location.
     *  In backend mode the caller can also sort the results by column and direction, and the chosen sort
     *  preference is persisted per user so the backend grid remembers
     *  it across requests. Access is validated against announcement editor permissions for the business.
     *
     * @return AnnouncementListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AnnouncementListApiGetResponse
    {
        return new AnnouncementListApiGetResponse($this->client->request('/Wl/Announcement/AnnouncementList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'id_order' => $this->id_order,
            'id_sort_field' => $this->id_sort_field,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_search' => $this->text_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
