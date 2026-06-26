<?php

namespace WlSdk\Thoth\LayoutBe\Login;

/**
 * Response from GET
 */
class LoginLogoGetResponse
{
    /**
     * Logo height.
     *
     * @var int|null
     */
    public ?int $i_height = null;

    /**
     * Logo width.
     *
     * @var int|null
     */
    public ?int $i_width = null;

    /**
     * Logo URL.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->i_height = isset($data['i_height']) ? (int)$data['i_height'] : null;
        $this->i_width = isset($data['i_width']) ? (int)$data['i_width'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
