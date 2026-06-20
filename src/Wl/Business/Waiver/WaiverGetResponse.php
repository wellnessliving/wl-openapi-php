<?php

namespace WlSdk\Wl\Business\Waiver;

/**
 * Response from GET
 */
class WaiverGetResponse
{
    /**
     * Does the business have a waiver or not?
     *
     * @var bool|null
     */
    public ?bool $has_waiver = null;

    /**
     * Text of the current waiver with the substituted variables.
     *
     * @var string|null
     */
    public ?string $html_waiver = null;

    public function __construct(array $data)
    {
        $this->has_waiver = isset($data['has_waiver']) ? (bool)$data['has_waiver'] : null;
        $this->html_waiver = isset($data['html_waiver']) ? (string)$data['html_waiver'] : null;
    }
}
