<?php

namespace WlSdk\Wl\Video\Category;

/**
 * Response from PUT
 */
class CategoryElementPutResponse
{
    /**
     * The category key.
     *
     * @var string|null
     */
    public ?string $k_video_category = null;

    public function __construct(array $data)
    {
        $this->k_video_category = isset($data['k_video_category']) ? (string)$data['k_video_category'] : null;
    }
}
