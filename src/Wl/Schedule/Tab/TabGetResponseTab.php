<?php

namespace WlSdk\Wl\Schedule\Tab;

class TabGetResponseTab
{
    /**
     * The tab type ID which is one of the {@link \WlSdk\Wl\Classes\Tab\TabSid} constants.
     *
     * @var int|null
     */
    public ?int $id_class_tab_object = null;

    /**
     * If this tab has redefined a default system Class Tab then it references a constant defined in
     * {@link \WlSdk\Wl\Classes\Tab\TabSid}.
     *
     * Otherwise, this will be `null`.
     *
     * @var int|null
     */
    public ?int $id_class_tab_system = null;

    /**
     * The class tab key. This will be `null` if it's a system tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * A unique identifier in the list.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The tab title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->id_class_tab_object = isset($data['id_class_tab_object']) ? (int)$data['id_class_tab_object'] : null;
        $this->id_class_tab_system = isset($data['id_class_tab_system']) ? (int)$data['id_class_tab_system'] : null;
        $this->k_class_tab = isset($data['k_class_tab']) ? (string)$data['k_class_tab'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
