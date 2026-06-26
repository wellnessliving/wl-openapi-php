<?php

namespace WlSdk\Wl\Page\Backend;

class ConfigGetResponseMapState
{
    /**
     * Left navigation panel from {@link \WlSdk\Wl\Page\Map\MapSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Page\Map\MapSid
     */
    public ?int $id_map = null;

    /**
     * bool `true` if panel is minimized, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_close = null;

    public function __construct(array $data)
    {
        $this->id_map = isset($data['id_map']) ? (int)$data['id_map'] : null;
        $this->is_close = isset($data['is_close']) ? (bool)$data['is_close'] : null;
    }
}
