<?php

namespace WlSdk\Wl\Profile\Alert;

class AlertEditGetResponseLoginNoteDataLocation
{
    /**
     * HTML-escaped location title.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * `true` if this location is selected for the flag; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
