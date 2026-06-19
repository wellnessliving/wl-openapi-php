<?php
namespace WlSdk\Wl\Video\Category;

/**
 * Response from GET
 */
class CategoryListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_video_category = null;

    public function __construct(array $data)
    {
        $this->a_video_category = isset($data['a_video_category']) ? (array)$data['a_video_category'] : null;
    }
}
