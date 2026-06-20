<?php

namespace WlSdk\Wl\Video\Category;

/**
 * Response from GET
 */
class CategoryListGetResponse
{
    /**
     * The business video library categories as found in `k_business`.
     *
     * Each element has the following structure:
     *
     * @var CategoryListGetResponseVideoCategory[]|null
     */
    public ?array $a_video_category = null;

    public function __construct(array $data)
    {
        $this->a_video_category = isset($data['a_video_category']) ? array_map(static fn ($item) => new CategoryListGetResponseVideoCategory((array)$item), (array)$data['a_video_category']) : null;
    }
}
