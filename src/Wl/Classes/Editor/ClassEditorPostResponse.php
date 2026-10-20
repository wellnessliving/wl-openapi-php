<?php

namespace WlSdk\Wl\Classes\Editor;

/**
 * Response from POST
 */
class ClassEditorPostResponse
{
    /**
     * Key of the class the save wrote.
     *
     * The key of {@link \WlSdk\Wl\Classes\Editor\ClassEditor} while a saved class is changed, and the key of the
     * class that has
     * just been created otherwise. Empty string until the save has run.
     *
     * @var string|null
     */
    public ?string $k_class_save = null;

    public function __construct(array $data)
    {
        $this->k_class_save = isset($data['k_class_save']) ? (string)$data['k_class_save'] : null;
    }
}
