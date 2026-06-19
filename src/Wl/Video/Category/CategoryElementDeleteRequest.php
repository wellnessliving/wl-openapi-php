<?php
namespace WlSdk\Wl\Video\Category;

class CategoryElementDeleteRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The category key.
     *
     * @var string|null
     */
    public ?string $k_video_category = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_video_category' => $this->k_video_category,
            ],
            static fn($v) => $v !== null
        );
    }
}
