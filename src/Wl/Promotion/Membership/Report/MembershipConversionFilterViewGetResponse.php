<?php

namespace WlSdk\Wl\Promotion\Membership\Report;

/**
 * Response from GET
 */
class MembershipConversionFilterViewGetResponse
{
    /**
     * Filter view html
     *
     * @var string|null
     */
    public ?string $html_view = null;

    public function __construct(array $data)
    {
        $this->html_view = isset($data['html_view']) ? (string)$data['html_view'] : null;
    }
}
