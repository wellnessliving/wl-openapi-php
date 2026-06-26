<?php

namespace WlSdk\Wl\Hint;

class HintPutRequest
{
    /**
     * A list of hints that should be displayed sequentially.
     *
     * Template should be placed in `Wl\Hint\Xml` as a single xml file.
     *
     * @var array[]|null
     */
    public ?array $a_template = null;

    /**
     * Key of the business to show the hint in.
     *
     * `null` means to show hint in the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user who will be shown a hint.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_template' => $this->a_template,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
