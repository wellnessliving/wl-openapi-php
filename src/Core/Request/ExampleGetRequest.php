<?php
namespace WlSdk\Core\Request;

class ExampleGetRequest
{
    /**
     * Example argument.
     *
     * @var int|null
     */
    public ?int $i_argument = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_argument' => $this->i_argument,
            ],
            static fn($v) => $v !== null
        );
    }
}
