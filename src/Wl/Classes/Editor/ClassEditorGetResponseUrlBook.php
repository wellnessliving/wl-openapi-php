<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseUrlBook
{
    /**
     * URL to book the event.
     *
     * @var string|null
     */
    public ?string $url_book = null;

    public function __construct(array $data)
    {
        $this->url_book = isset($data['url_book']) ? (string)$data['url_book'] : null;
    }
}
