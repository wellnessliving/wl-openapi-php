<?php
namespace WlSdk\Wl\Video\Level;

use WlSdk\WlSdkClient;

/**
 * Creates a new video level.
 */
class LevelApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The video level key.
     *
     * @var string|null
     */
    public ?string $k_video_level = null;

    /**
     * The video level title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * If `true`, confirmation is required to delete videos. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_delete_confirm = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates a new video level.
     *
     * Creates a difficulty level entry for the business video library. The new level is appended
     * at the end of the current sort order and can be reordered afterwards using
     * `put()`. Requires backend access with the video library management privilege.
     *
     * @return LevelApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): LevelApiPostResponse
    {
        return new LevelApiPostResponse($this->client->request('/Wl/Video/Level/Level.json', $this->params(), 'POST'));
    }

    /**
     * Updates the specified video level.
     *
     * Renames an existing difficulty level in the business video library. Requires backend access
     * with the video library management privilege.
     *
     * @return LevelApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): LevelApiPutResponse
    {
        return new LevelApiPutResponse($this->client->request('/Wl/Video/Level/Level.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes the specified video level.
     *
     * Permanently removes the video level and unassigns it from all videos. If any videos are
     * currently assigned to this level, a confirmation flag must be set; otherwise the API throws
     * a confirmation-required error so the caller can prompt the user before proceeding.
     *
     * @return LevelApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): LevelApiDeleteResponse
    {
        return new LevelApiDeleteResponse($this->client->request('/Wl/Video/Level/Level.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_video_level' => $this->k_video_level,
            'text_title' => $this->text_title,
            'is_delete_confirm' => $this->is_delete_confirm,
            ],
            static fn($v) => $v !== null
        );
    }
}
