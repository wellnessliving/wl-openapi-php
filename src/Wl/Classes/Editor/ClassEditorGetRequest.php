<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class key.
     *
     * `0` while a new class is created, so the key of the model of the client has a value. The key is only checked
     * when it points at a class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            ],
            static fn ($v) => $v !== null
        );
    }
}
