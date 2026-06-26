<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceListGetResponseClientAsset
{
    /**
     * Resource key. Primary key in RsResourceSql table.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets)
     * by '#'.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Title of the asset.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
