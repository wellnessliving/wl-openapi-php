<?php

namespace WlSdk\Wl\ClassPass;

class ServiceListGetResponseService
{
    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $dtu_last_update = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_interval = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_service_id = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->dtu_last_update = isset($data['dtu_last_update']) ? (array)$data['dtu_last_update'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_interval = isset($data['i_interval']) ? (int)$data['i_interval'] : null;
        $this->s_service_id = isset($data['s_service_id']) ? (string)$data['s_service_id'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
