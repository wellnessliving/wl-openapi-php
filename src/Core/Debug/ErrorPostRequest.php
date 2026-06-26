<?php

namespace WlSdk\Core\Debug;

class ErrorPostRequest
{
    /**
     * List of errors. For structure see Core_Debug_ErrorModel.a_error_list.
     *
     * JSON-encoded array mary arrive as a `string`.
     *
     * @var array|string|null
     */
    public $a_error_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_error_list' => $this->a_error_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
