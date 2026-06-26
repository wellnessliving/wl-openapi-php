<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

/**
 * Response from GET
 */
class TemplateAutosaveGetResponse
{
    /**
     * Determines whether template autosave is enabled. `true` if autosave is enabled, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_autosave = null;

    public function __construct(array $data)
    {
        $this->is_autosave = isset($data['is_autosave']) ? (bool)$data['is_autosave'] : null;
    }
}
