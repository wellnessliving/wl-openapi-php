<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Returns the list of video levels for the business.
 */
class LevelListApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * A list of video level keys in the order to be saved.
     *
     * @var string[]|null
     */
    public ?array $a_order = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of video levels for the business.
     *
     * Returns all difficulty levels configured for the business video library, sorted by their
     * current display order. Used to populate level pickers when creating or editing videos.
     *
     * @return LevelListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): LevelListApiGetResponse
    {
        return new LevelListApiGetResponse($this->client->request('/Wl/Video/Level/LevelList.json', $this->params(), 'GET'));
    }

    /**
     * Updates the order of video levels.
     *
     * Reorders the difficulty levels for the business video library according to the provided list.
     * Requires backend access with the video library management privilege.
     *
     * @return LevelListApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): LevelListApiPutResponse
    {
        return new LevelListApiPutResponse($this->client->request('/Wl/Video/Level/LevelList.json', $this->params(), 'PUT'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_order' => $this->a_order,
            ],
            static fn($v) => $v !== null
        );
    }
}
