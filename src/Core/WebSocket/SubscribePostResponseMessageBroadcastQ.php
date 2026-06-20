<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastQ
{
    /**
     * Duration of the generation of the report in seconds.
     *
     * @var int|null
     */
    public ?int $i_generation = null;

    /**
     * ID of the report that was generated.
     * One of the [RsReportSid](#/components/schemas/RsReportSid) constants.
     *
     * @var int|null
     */
    public ?int $id_report = null;

    /**
     * Whether need to display a message about report generation, regardless of the generation time.
     *
     * @var bool|null
     */
    public ?bool $is_need_show = null;

    /**
     * Report accumulation.
     *
     * @var string|null
     */
    public ?string $k_report_accumulation = null;

    /**
     * Title of the report that was generated.
     *
     * @var string|null
     */
    public ?string $text_report = null;

    public function __construct(array $data)
    {
        $this->i_generation = isset($data['i_generation']) ? (int)$data['i_generation'] : null;
        $this->id_report = isset($data['id_report']) ? (int)$data['id_report'] : null;
        $this->is_need_show = isset($data['is_need_show']) ? (bool)$data['is_need_show'] : null;
        $this->k_report_accumulation = isset($data['k_report_accumulation']) ? (string)$data['k_report_accumulation'] : null;
        $this->text_report = isset($data['text_report']) ? (string)$data['text_report'] : null;
    }
}
