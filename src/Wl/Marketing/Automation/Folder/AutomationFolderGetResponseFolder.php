<?php

namespace WlSdk\Wl\Marketing\Automation\Folder;

class AutomationFolderGetResponseFolder
{
    /**
     * Folder key. Primary key in AutomationFolderSql table.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    /**
     * Folder title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_folder = isset($data['k_folder']) ? (string)$data['k_folder'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
