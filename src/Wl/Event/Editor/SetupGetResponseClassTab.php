<?php

namespace WlSdk\Wl\Event\Editor;

class SetupGetResponseClassTab
{
    /**
     * `true` if the event is shown in this tab, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_selected = null;

    /**
     * Key of the tab: the ID of the tab object and the key of the tab joined with a hyphen. The key of a system
     * tab is `0`.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * Title of the tab.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_selected = isset($data['is_selected']) ? (bool)$data['is_selected'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
