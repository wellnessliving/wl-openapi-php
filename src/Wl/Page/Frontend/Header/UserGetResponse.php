<?php

namespace WlSdk\Wl\Page\Frontend\Header;

/**
 * Response from GET
 */
class UserGetResponse
{
    /**
     * Rendered HTML of the frontend user menu.
     *
     * @var string|null
     */
    public ?string $html_menu = null;

    /**
     * Rendered HTML of the frontend user block.
     *
     * @var string|null
     */
    public ?string $html_user = null;

    public function __construct(array $data)
    {
        $this->html_menu = isset($data['html_menu']) ? (string)$data['html_menu'] : null;
        $this->html_user = isset($data['html_user']) ? (string)$data['html_user'] : null;
    }
}
