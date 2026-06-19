<?php
namespace WlSdk\Wl\Classes\ClassList;

use WlSdk\WlSdkClient;

/**
 * Returns list of classes and events in the business.
 */
class ListApi
{
    /**
     * List of tabs keys.
     * Filtering by Book Now Tab is not supported if `is_franchise` is `true`.
     * 
     * `null` if no filtering by Book Now Tab is required.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * ID of book now tab. One of [TabSid](#/components/schemas/Wl.Classes.Tab.TabSid) constants.
     * Only [TabSid::TRAINING](#/components/schemas/Wl.Classes.Tab.TabSid) and
     * [TabSid::ENROLLMENT](#/components/schemas/Wl.Classes.Tab.TabSid) book now tab are supported.
     * Filtering by Book Now Tab is not supported if `is_franchise` is `true`.
     * 
     * `null` if no filtering by Book Now Tab is required.
     *
     * @var int|null
     */
    public ?int $id_class_tab = null;

    /**
     * Whether all events should be returned from same enrollment block.
     * 
     * * `true` to return all events from same enrollment block.
     * * `false` to return only one event from each enrollment block.
     * 
     * Only published and non-empty events will be returned for the client.
     * To return empty events, use `is_enrollment_block_empty`.
     * 
     * For the staff, filtering by publication or emptiness is not applied.
     *
     * @var bool|null
     */
    public ?bool $is_enrollment_block_all = null;

    /**
     * Whether to include events without sessions.
     * An empty event is neither published nor unpublished. It simply has no sessions.
     * Such events can be useful for list filters.
     * 
     * Affects clients only.
     * Does not affect staff. Staff always see empty events.
     * 
     * Makes sense in conjunction with the flag `is_enrollment_block_all`.
     * 
     * * `true` to include events without sessions.
     * * `false` to exclude events without sessions.
     *
     * @var bool|null
     */
    public ?bool $is_enrollment_block_empty = null;

    /**
     * Whether to include events in the result.
     * 
     * true` to include both classes and events.
     * false` to include only classes.
     *
     * @var bool|null
     */
    public ?bool $is_event_include = null;

    /**
     * Whether to return franchisee-created classes (if business is franchisor).
     * `true` to include franchisee-created classes.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of classes and events in the business.
     *
     * Used by import and integration tools to enumerate all classes and events offered by a business.
     * In franchise mode, classes from all franchisee locations are included. Results are sorted by title
     * and start date.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Classes/ClassList/List.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_class_tab' => $this->a_class_tab,
            'id_class_tab' => $this->id_class_tab,
            'is_enrollment_block_all' => $this->is_enrollment_block_all,
            'is_enrollment_block_empty' => $this->is_enrollment_block_empty,
            'is_event_include' => $this->is_event_include,
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
