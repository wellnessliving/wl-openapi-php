<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastJ
{
    /**
     * End of change interval.
     * 
     * Empty string if change interval has no end.
     *
     * @var string|null
     */
    public ?string $dt_end_local = null;

    /**
     * Start of change interval.
     *
     * @var string|null
     */
    public ?string $dt_start_local = null;

    /**
     * New "Book now" tab primary key in [TabSid](#/components/schemas/Wl.Classes.Tab.TabSid) table.
     * 
     * `null` means system default tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab_new = null;

    /**
     * Old "Book now" tab primary key in [TabSid](#/components/schemas/Wl.Classes.Tab.TabSid) table.
     * 
     * `null` means system default tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab_old = null;

    public function __construct(array $data)
    {
        $this->dt_end_local = isset($data['dt_end_local']) ? (string)$data['dt_end_local'] : null;
        $this->dt_start_local = isset($data['dt_start_local']) ? (string)$data['dt_start_local'] : null;
        $this->k_class_tab_new = isset($data['k_class_tab_new']) ? (string)$data['k_class_tab_new'] : null;
        $this->k_class_tab_old = isset($data['k_class_tab_old']) ? (string)$data['k_class_tab_old'] : null;
    }
}
