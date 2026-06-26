<?php

namespace WlSdk\Wl\Business\Trial;

/**
 * Response from GET
 */
class TrialGetResponse
{
    /**
     * Whether business account has trial limitation.
     *
     * `true` if business account has trial limitation, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_trial = null;

    public function __construct(array $data)
    {
        $this->is_trial = isset($data['is_trial']) ? (bool)$data['is_trial'] : null;
    }
}
