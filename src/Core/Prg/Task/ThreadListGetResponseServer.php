<?php

namespace WlSdk\Core\Prg\Task;

class ThreadListGetResponseServer
{
    /**
     * Time of last data update.
     *
     * @var string|null
     */
    public ?string $dtu_update = null;

    /**
     * Private (local) IP.
     *
     * @var string|null
     */
    public ?string $ip_private = null;

    /**
     * Public IP.
     *
     * @var string|null
     */
    public ?string $ip_public = null;

    /**
     * EC2 instance tag name.
     *
     * @var string|null
     */
    public ?string $s_tag = null;

    /**
     * Elapsed time since the last data update.
     *
     * @var string|null
     */
    public ?string $text_update = null;

    public function __construct(array $data)
    {
        $this->dtu_update = isset($data['dtu_update']) ? (string)$data['dtu_update'] : null;
        $this->ip_private = isset($data['ip_private']) ? (string)$data['ip_private'] : null;
        $this->ip_public = isset($data['ip_public']) ? (string)$data['ip_public'] : null;
        $this->s_tag = isset($data['s_tag']) ? (string)$data['s_tag'] : null;
        $this->text_update = isset($data['text_update']) ? (string)$data['text_update'] : null;
    }
}
