<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

/**
 * Response from POST
 */
class AutomationFolderPostResponse
{
    /**
     * Folder key.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    public function __construct(array $data)
    {
        $this->k_folder = isset($data['k_folder']) ? (string)$data['k_folder'] : null;
    }
}
