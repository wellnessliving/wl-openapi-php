<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

/**
 * Response from GET
 */
class AutomationFolderGetResponse
{
    /**
     * List of custom folders in the business.
     * If `k_folder` is passed, the list not contains the folder with this key.
     * Each element has the following structure:
     *
     * @var AutomationFolderGetResponseFolder[]|null
     */
    public ?array $a_folder = null;

    /**
     * Count of automations in the folder.
     * If `k_folder` is not passed, the value is always `0`.
     *
     * @var int|null
     */
    public ?int $i_automation = null;

    public function __construct(array $data)
    {
        $this->a_folder = isset($data['a_folder']) ? array_map(static fn ($item) => new AutomationFolderGetResponseFolder((array)$item), (array)$data['a_folder']) : null;
        $this->i_automation = isset($data['i_automation']) ? (int)$data['i_automation'] : null;
    }
}
