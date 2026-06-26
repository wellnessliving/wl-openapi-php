<?php

namespace WlSdk\Wl\Login\Search\Filter;

/**
 * Response from GET
 */
class LoginSearchFilterGetResponse
{
    /**
     * User's search settings.
     *
     * @var array|null
     */
    public ?array $a_search_filter = null;

    /**
     * Indicate if redirection to client's profile page was made using the login search panel.
     *
     * @var bool|null
     */
    public ?bool $is_login_search = null;

    /**
     * State of auto check-in service.
     *
     * @var bool|null
     */
    public ?bool $is_reception = null;

    public function __construct(array $data)
    {
        $this->a_search_filter = isset($data['a_search_filter']) ? (array)$data['a_search_filter'] : null;
        $this->is_login_search = isset($data['is_login_search']) ? (bool)$data['is_login_search'] : null;
        $this->is_reception = isset($data['is_reception']) ? (bool)$data['is_reception'] : null;
    }
}
