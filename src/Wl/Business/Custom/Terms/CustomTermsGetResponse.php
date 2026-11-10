<?php

namespace WlSdk\Wl\Business\Custom\Terms;

/**
 * Response from GET
 */
class CustomTermsGetResponse
{
    /**
     * Current value of every term slot. Returned by `get()`, posted to
     * `post()` to save.
     *
     * @var CustomTermsGetResponseTermOption[]|null
     */
    public ?array $a_term_option = null;

    public function __construct(array $data)
    {
        $this->a_term_option = isset($data['a_term_option']) ? array_map(static fn ($item) => new CustomTermsGetResponseTermOption((array)$item), (array)$data['a_term_option']) : null;
    }
}
