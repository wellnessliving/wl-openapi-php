<?php

namespace WlSdk\Wl\Report\Collection\Dynamic;

class CollectionManageGetResponseReportList
{
    /**
     * Report's position in the collection.
     *
     * @var int|null
     */
    public ?int $i_position = null;

    /**
     * Report ID, one of {@link \WlSdk\RsReportSid}.
     *
     * @var int|null
     * @see \WlSdk\RsReportSid
     */
    public ?int $id_report = null;

    public function __construct(array $data)
    {
        $this->i_position = isset($data['i_position']) ? (int)$data['i_position'] : null;
        $this->id_report = isset($data['id_report']) ? (int)$data['id_report'] : null;
    }
}
