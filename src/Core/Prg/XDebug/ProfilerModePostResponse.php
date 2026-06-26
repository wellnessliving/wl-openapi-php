<?php

namespace WlSdk\Core\Prg\XDebug;

/**
 * Response from POST
 */
class ProfilerModePostResponse
{
    /**
     * `true` if xdebug profiler enable, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_enable = null;

    public function __construct(array $data)
    {
        $this->is_enable = isset($data['is_enable']) ? (bool)$data['is_enable'] : null;
    }
}
