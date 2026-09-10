<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListGetResponseUserListRankCategoryCurrentLogo
{
    /**
     * Actual thumbnail height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Actual thumbnail width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * `true` if the rank does not have its own image and a placeholder was returned.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * URL of the thumbnail image.
     *
     * @var string|null
     */
    public ?string $url = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->url = isset($data['url']) ? (string)$data['url'] : null;
    }
}
