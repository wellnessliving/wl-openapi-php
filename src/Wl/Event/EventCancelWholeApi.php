<?php
namespace WlSdk\Wl\Event;

use WlSdk\WlSdkClient;

/**
 * Cancels book of event `k_class`.
 */
class EventCancelWholeApi
{
    /**
     * Key of the business in which the class resides.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * An event key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * A user key.
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
     * Cancels book of event `k_class`.
     *
     * Used when a client wants to drop out of a multi-session event entirely. Cancels all remaining
     * upcoming sessions at once, including any waitlisted spots, without requiring the client to cancel
     * each session individually.
     *
     * @return EventCancelWholeApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): EventCancelWholeApiPostResponse
    {
        return new EventCancelWholeApiPostResponse($this->client->request('/Wl/Event/EventCancelWhole.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
