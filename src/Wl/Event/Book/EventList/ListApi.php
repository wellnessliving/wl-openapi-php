<?php
namespace WlSdk\Wl\Event\Book\EventList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of events.
 */
class ListApi
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of events.
     *
     * Used to populate the events tab on the client-facing booking page. Returns all events offered in
     * the business (or filtered to a specific tab), together with availability flags so the UI can
     * show which events still have open spots.
     *
     * @return ListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ListApiGetResponse
    {
        return new ListApiGetResponse($this->client->request('/Wl/Event/Book/EventList/List.json', $this->params(), 'GET'));
    }

    private function params(): array
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
