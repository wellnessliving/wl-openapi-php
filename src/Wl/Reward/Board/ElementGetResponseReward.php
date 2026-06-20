<?php

namespace WlSdk\Wl\Reward\Board;

class ElementGetResponseReward
{
    /**
     * Score in points.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Reward name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * URL to the user logo image.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
