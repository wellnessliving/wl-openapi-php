<?php

namespace WlSdk\Wl\Login\Agree;

/**
 * Response from GET
 */
class AgreeGetResponse
{
    /**
     * Formatted text of business liability release. Not empty if the business has a liability release and if the
     * user did not agree to this liability release.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    public function __construct(array $data)
    {
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
    }
}
