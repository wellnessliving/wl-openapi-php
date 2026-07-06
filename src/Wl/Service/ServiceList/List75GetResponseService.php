<?php

namespace WlSdk\Wl\Service\ServiceList;

class List75GetResponseService
{
    /**
     * Whether service will be hidden in the White Label mobile application.
     *  `true` means that service will not be displayed, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * Whether appointment type is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Appointment type identifier, primary key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Appointment type category identifier, primary key.
     *
     * @var string|null
     */
    public ?string $k_service_category = null;

    /**
     * Appointment type category name.
     *
     * @var string|null
     */
    public ?string $text_category = null;

    /**
     * Appointment type name.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    public function __construct(array $data)
    {
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_service_category = isset($data['k_service_category']) ? (string)$data['k_service_category'] : null;
        $this->text_category = isset($data['text_category']) ? (string)$data['text_category'] : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
    }
}
