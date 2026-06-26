<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

class TemplateAutosavePostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Determines whether template autosave is enabled. `true` if autosave is enabled, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_autosave = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_autosave' => $this->is_autosave,
            ],
            static fn ($v) => $v !== null
        );
    }
}
