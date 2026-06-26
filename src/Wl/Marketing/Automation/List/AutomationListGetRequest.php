<?php

namespace WlSdk\Wl\Marketing\Automation\List;

class AutomationListGetRequest
{
    /**
     * A status of automation. One of the {@link \WlSdk\Wl\Marketing\Automation\AutomationStatusSid} constants.
     * `null` to not perform filtering by status.
     *
     * @var int|null
     * @see \WlSdk\Wl\Marketing\Automation\AutomationStatusSid
     */
    public ?int $id_status = null;

    /**
     * Business key.
     * `null` to use the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Folder key.
     * `null` to load automations from all folders.
     * Empty string to load automations from the default folder.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    /**
     * The filter phrase to filter automations by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_status' => $this->id_status,
            'k_business' => $this->k_business,
            'k_folder' => $this->k_folder,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
