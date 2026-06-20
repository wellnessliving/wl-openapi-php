<?php
namespace WlSdk\Wl\Video\Tag;

/**
 * Response from POST
 */
class TagPostResponse
{
    /**
     * The video tag key.
     *
     * @var string|null
     */
    public ?string $k_video_tag = null;

    public function __construct(array $data)
    {
        $this->k_video_tag = isset($data['k_video_tag']) ? (string)$data['k_video_tag'] : null;
    }
}
