<?php
namespace WlSdk\Wl\Login\Search;

class ConcertoGetRequest
{
    /**
     * Business to search user in.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Email to search.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Phone to search.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
