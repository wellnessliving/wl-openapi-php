<?php
namespace WlSdk\Wl\Fitbuilder;

use WlSdk\WlSdkClient;

/**
 * Notifies messengers with new information.
 */
class MessageApi
{
    /**
     * Messenger channel key.
     *
     * @var string|null
     */
    public ?string $k_channel = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_data = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Notifies messengers with new information.
     *
     * Accepts a channel key and a data payload, then dispatches a notification to the Fitbuilder messenger channel
     * associated with that key. Requires the `notify` API privilege.
     *
     * @return MessageApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): MessageApiPostResponse
    {
        return new MessageApiPostResponse($this->client->request('/Wl/Fitbuilder/Message.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_channel' => $this->k_channel,
            'a_data' => $this->a_data,
            ],
            static fn($v) => $v !== null
        );
    }
}
