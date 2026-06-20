<?php
namespace WlSdk\Wl\Video\Tag;

class TagPostRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_video_tag' => $this->k_video_tag,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
