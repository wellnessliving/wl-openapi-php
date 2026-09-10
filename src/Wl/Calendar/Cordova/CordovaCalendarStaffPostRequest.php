<?php

namespace WlSdk\Wl\Calendar\Cordova;

class CordovaCalendarStaffPostRequest
{
    /**
     * Date of last sync.
     *
     * @var string|null
     */
    public ?string $dtu_synced_last = null;

    /**
     * Business to synchronize calendar from.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User to synchronize calendar for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Books/visits that are already synchronized in client's calendar.
     * Serialized list of pairs [[visit key () => visit hash], ...].
     *
     * @var string|null
     */
    public ?string $s_visit_synced = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_synced_last' => $this->dtu_synced_last,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            's_visit_synced' => $this->s_visit_synced,
            ],
            static fn ($v) => $v !== null
        );
    }
}
