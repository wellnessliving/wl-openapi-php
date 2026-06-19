<?php
namespace WlSdk\Wl\Video\Tag;

use WlSdk\WlSdkClient;

/**
 * Creates a new video tag.
 */
class TagApi
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The video tag key.
     *
     * @var string|null
     */
    public ?string $k_video_tag = null;

    /**
     * The video tag title.
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
     * Creates a new video tag.
     *
     * Adds a new content tag to the business video library for use when categorizing videos.
     * Requires backend access and an active video subscription with at least the basic plan.
     *
     * @return TagApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): TagApiPostResponse
    {
        return new TagApiPostResponse($this->client->request('/Wl/Video/Tag/Tag.json', $this->params(), 'POST'));
    }

    /**
     * Updates the specified video tag.
     *
     * Renames an existing content tag in the business video library. Requires backend access
     * and an active video subscription with at least the basic plan.
     *
     * @return TagApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): TagApiPutResponse
    {
        return new TagApiPutResponse($this->client->request('/Wl/Video/Tag/Tag.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes the specified video tag.
     *
     * Permanently removes the video tag from the business library. If any videos are currently
     * assigned to this tag, a confirmation flag must be set; otherwise the API throws a
     * confirmation-required error so the caller can prompt the user before proceeding.
     *
     * @return TagApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): TagApiDeleteResponse
    {
        return new TagApiDeleteResponse($this->client->request('/Wl/Video/Tag/Tag.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_video_tag' => $this->k_video_tag,
            'text_title' => $this->text_title,
            'is_delete_confirm' => $this->is_delete_confirm,
            ],
            static fn($v) => $v !== null
        );
    }
}
