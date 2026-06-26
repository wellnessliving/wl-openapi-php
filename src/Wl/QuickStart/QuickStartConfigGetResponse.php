<?php

namespace WlSdk\Wl\QuickStart;

/**
 * Response from GET
 */
class QuickStartConfigGetResponse
{
    /**
     * Last configuration for the quick start state.
     *
     * `null` if not initialized yet. `array` for compatibility with JavaScript.
     *
     *  Has the following structure:
     *
     * @var QuickStartConfigGetResponseConfig|null
     */
    public ?QuickStartConfigGetResponseConfig $a_config = null;

    public function __construct(array $data)
    {
        $this->a_config = isset($data['a_config']) ? new QuickStartConfigGetResponseConfig((array)$data['a_config']) : null;
    }
}
