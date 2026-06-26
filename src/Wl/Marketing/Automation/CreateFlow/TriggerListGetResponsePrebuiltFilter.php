<?php

namespace WlSdk\Wl\Marketing\Automation\CreateFlow;

class TriggerListGetResponsePrebuiltFilter
{
    /**
     * Count of pre-built automation templates in this folder.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Folder key of the pre-built automation. Primary key in AutomationFolderSql table.
     *
     * @var string|null
     */
    public ?string $k_folder = null;

    /**
     * Title of the pre-built automation template type.
     *
     * @var string|null
     */
    public ?string $text_folder = null;

    public function __construct(array $data)
    {
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->k_folder = isset($data['k_folder']) ? (string)$data['k_folder'] : null;
        $this->text_folder = isset($data['text_folder']) ? (string)$data['text_folder'] : null;
    }
}
