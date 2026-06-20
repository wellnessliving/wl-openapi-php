<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastR
{
    /**
     * Number of successfully processed items.
     *
     * @var int|null
     */
    public ?int $i_complete = null;

    /**
     * Number of failed items.
     *
     * @var int|null
     */
    public ?int $i_fail = null;

    /**
     * Number of items left to process.
     *
     * @var int|null
     */
    public ?int $i_left = null;

    /**
     * Key of the import being processing.
     *
     * @var string|null
     */
    public ?string $k_import = null;

    /**
     * Url link to download log file with import progress.
     *
     * @var string|null
     */
    public ?string $url_log = null;

    public function __construct(array $data)
    {
        $this->i_complete = isset($data['i_complete']) ? (int)$data['i_complete'] : null;
        $this->i_fail = isset($data['i_fail']) ? (int)$data['i_fail'] : null;
        $this->i_left = isset($data['i_left']) ? (int)$data['i_left'] : null;
        $this->k_import = isset($data['k_import']) ? (string)$data['k_import'] : null;
        $this->url_log = isset($data['url_log']) ? (string)$data['url_log'] : null;
    }
}
