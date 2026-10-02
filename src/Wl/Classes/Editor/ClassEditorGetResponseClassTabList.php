<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassTabList
{
    /**
     * Key of the tab: the ID of the tab object and the key of the tab joined with a hyphen. The key of a system
     * tab is `0`.
     *
     * @var string|null
     */
    public ?string $text_key = null;

    /**
     * Title of the tab.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->text_key = isset($data['text_key']) ? (string)$data['text_key'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
