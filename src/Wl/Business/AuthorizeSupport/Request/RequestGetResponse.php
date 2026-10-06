<?php

namespace WlSdk\Wl\Business\AuthorizeSupport\Request;

/**
 * Response from GET
 */
class RequestGetResponse
{
    /**
     * `true` - support must wait permission from franchisee. `false` - no need to wait; authorisation is already
     * done.
     *
     * @var bool|null
     */
    public ?bool $is_pending = null;

    public function __construct(array $data)
    {
        $this->is_pending = isset($data['is_pending']) ? (bool)$data['is_pending'] : null;
    }
}
