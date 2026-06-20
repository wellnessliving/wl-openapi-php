<?php
namespace WlSdk\Wl\Book\Process;

class Process54GetResponsePath
{
    /**
     * The step ID. One of the {@link \WlSdk\Wl\Book\Process\ProcessSpaSid} constants.
     *
     * @var \WlSdk\Wl\Book\Process\ProcessSpaSid|null
     */
    public ?\WlSdk\Wl\Book\Process\ProcessSpaSid $id_book_process = null;

    /**
     * `true` - this item is current.
     * `false` - this item isn't current or not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_current = null;

    public function __construct(array $data)
    {
        $this->id_book_process = isset($data['id_book_process']) ? \WlSdk\Wl\Book\Process\ProcessSpaSid::tryFrom((int)$data['id_book_process']) : null;
        $this->is_current = isset($data['is_current']) ? (bool)$data['is_current'] : null;
    }
}
