<?php

namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastA
{
    /**
     * A CAS (compare-and-swap) number that allows to track changes in the report storage.
     *
     * This number is changed every time content of the report gets updated.
     * If this number is not changed, the content is not updated.
     *
     * Copy of ReportStorageListSql.`i_cas_change`.
     *
     * @var int|null
     */
    public ?int $i_cas_change = null;

    /**
     * Status of this report.
     *
     * One of {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorStatusSid} constants.
     *
     * @var int|null
     */
    public ?int $id_report_status = null;

    public function __construct(array $data)
    {
        $this->i_cas_change = isset($data['i_cas_change']) ? (int)$data['i_cas_change'] : null;
        $this->id_report_status = isset($data['id_report_status']) ? (int)$data['id_report_status'] : null;
    }
}
