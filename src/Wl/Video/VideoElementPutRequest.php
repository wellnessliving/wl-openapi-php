<?php
namespace WlSdk\Wl\Video;

class VideoElementPutRequest
{
    /**
     * The video embed code.
     *
     * @var string|null
     */
    public ?string $html_embed = null;

    public function params(): array
    {
        return array_filter(
            [
            'html_embed' => $this->html_embed,
            ],
            static fn($v) => $v !== null
        );
    }
}
