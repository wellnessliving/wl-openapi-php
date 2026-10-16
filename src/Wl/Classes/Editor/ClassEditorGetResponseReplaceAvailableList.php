<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseReplaceAvailableList
{
    /**
     * Key of the class or event.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Title of the class or event.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
