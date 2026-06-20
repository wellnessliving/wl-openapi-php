<?php
namespace WlSdk\Wl\Book\Process\Purchase;

class Purchase56GetResponsePurchaseVisitLimit
{
    /**
     * The limit description.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
