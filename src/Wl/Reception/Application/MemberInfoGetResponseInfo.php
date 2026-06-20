<?php
namespace WlSdk\Wl\Reception\Application;

class MemberInfoGetResponseInfo
{
    /**
     * List of icons with additional information about business member.
     *
     * @var MemberInfoGetResponseInfoIcon|null
     */
    public ?MemberInfoGetResponseInfoIcon $a_icon = null;

    /**
     * Information about users vaccination status.
     *
     * @var MemberInfoGetResponseInfoVaccinationStatus|null
     */
    public ?MemberInfoGetResponseInfoVaccinationStatus $a_vaccination_status = null;

    /**
     * List of client's notes. Every element has keys:
     *
     * @var MemberInfoGetResponseInfoNote|null
     */
    public ?MemberInfoGetResponseInfoNote $a_note = null;

    /**
     * Amount the client owns to the business.
     *
     * @var string|null
     */
    public ?string $html_credit = null;

    /**
     * User`s login notes.&lt;/dd&gt;
     * 
     *  &lt;dt&gt;int &lt;var&gt;i_visit_credit&lt;/var&gt;&lt;/dt&gt;
     *  &lt;dd&gt;Count of unpaid visits if client has at least one.&lt;/dd&gt;
     * 
     *  &lt;dt&gt;bool &lt;var&gt;is_account_positive&lt;/var&gt;&lt;/dt&gt;
     *  &lt;dd&gt;If the user has a positive balance on his account.&lt;/dd&gt;
     * 
     *  &lt;dt&gt;bool &lt;var&gt;is_birthday&lt;/var&gt;&lt;/dt&gt;
     *  &lt;dd&gt;If a user has a birthday today.&lt;/dd&gt;
     * 
     *  &lt;dt&gt;bool &lt;var&gt;is_contract&lt;/var&gt;&lt;/dt&gt;
     *  &lt;dd&gt;&lt;tt&gt;true&lt;/tt&gt; if client has some contracts that he should agree.&lt;/dd&gt;
     * 
     *  &lt;dt&gt;bool &lt;var&gt;is_family_payer&lt;/var&gt;&lt;/dt&gt;
     *  &lt;dd&gt;`true` if the user makes payments for a family member, `false` otherwise.&lt;/dd&gt;
     * 
     *  &lt;dt&gt;bool &lt;var&gt;is_first&lt;/var&gt;&lt;/dt&gt;
     *  &lt;dd&gt;&lt;tt&gt;true&lt;/tt&gt; if this is a first visit of the client.&lt;/dd&gt;
     * 
     *  &lt;dt&gt;bool &lt;var&gt;is_form&lt;/var&gt;&lt;/dt&gt;
     *  &lt;dd&gt;`true` if the client has uncompleted one or more forms.
     *
     * @var string|null
     */
    public ?string $html_note = null;

    /**
     * `true` if for user exists not completed tasks.
     *
     * @var bool|null
     */
    public ?bool $is_task_active = null;

    /**
     * `true` if for user exists urgent tasks.
     *
     * @var bool|null
     */
    public ?bool $is_task_urgent = null;

    /**
     * `true` if client has not agreed with online waiver.
     *
     * @var bool|null
     */
    public ?bool $is_waiver = null;

    /**
     * Currency of business `$k_business`.
     * 
     *    It is currency of amount `m_credit`.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * User's account balance.
     *
     * @var string|null
     */
    public ?string $m_credit = null;

    /**
     * Display user balance or not.
     *
     * @var bool|null
     */
    public ?bool $show_amount = null;

    /**
     * User's address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Users age. Appears only on the day of birth.
     *
     * @var string|null
     */
    public ?string $text_age = null;

    /**
     * User's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * User's cell phone.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Users first name.
     *
     * @var string|null
     */
    public ?string $text_firstname = null;

    /**
     * Link to the page with client's attendance.
     *
     * @var string|null
     */
    public ?string $text_visit_credit = null;

    /**
     * Link to the page with information about client's account balance.
     *
     * @var string|null
     */
    public ?string $url_attendance = null;

    /**
     * Link to user's billing page.
     *
     * @var string|null
     */
    public ?string $url_billing = null;

    /**
     * Link to user's contract page
     *
     * @var string|null
     */
    public ?string $url_contract = null;

    /**
     * Link to user's forms page.
     *
     * @var string|null
     */
    public ?string $url_form = null;

    /**
     * Link to the client's overview page. Empty if for user not existing active or urgent tasks.
     *
     * @var string|null
     */
    public ?string $url_overview = null;

    /**
     * Link to user's profile.
     *
     * @var string|null
     */
    public ?string $url_profile = null;

    /**
     * Link to user's waiver page.
     *
     * @var string|null
     */
    public ?string $url_waiver = null;

    public function __construct(array $data)
    {
        $this->a_icon = isset($data['a_icon']) ? new MemberInfoGetResponseInfoIcon((array)$data['a_icon']) : null;
        $this->a_vaccination_status = isset($data['a_vaccination_status']) ? new MemberInfoGetResponseInfoVaccinationStatus((array)$data['a_vaccination_status']) : null;
        $this->a_note = isset($data['a_note']) ? new MemberInfoGetResponseInfoNote((array)$data['a_note']) : null;
        $this->html_credit = isset($data['html_credit']) ? (string)$data['html_credit'] : null;
        $this->html_note = isset($data['html_note']) ? (string)$data['html_note'] : null;
        $this->is_task_active = isset($data['is_task_active']) ? (bool)$data['is_task_active'] : null;
        $this->is_task_urgent = isset($data['is_task_urgent']) ? (bool)$data['is_task_urgent'] : null;
        $this->is_waiver = isset($data['is_waiver']) ? (bool)$data['is_waiver'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->m_credit = isset($data['m_credit']) ? (string)$data['m_credit'] : null;
        $this->show_amount = isset($data['show_amount']) ? (bool)$data['show_amount'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_age = isset($data['text_age']) ? (string)$data['text_age'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_firstname = isset($data['text_firstname']) ? (string)$data['text_firstname'] : null;
        $this->text_visit_credit = isset($data['text_visit_credit']) ? (string)$data['text_visit_credit'] : null;
        $this->url_attendance = isset($data['url_attendance']) ? (string)$data['url_attendance'] : null;
        $this->url_billing = isset($data['url_billing']) ? (string)$data['url_billing'] : null;
        $this->url_contract = isset($data['url_contract']) ? (string)$data['url_contract'] : null;
        $this->url_form = isset($data['url_form']) ? (string)$data['url_form'] : null;
        $this->url_overview = isset($data['url_overview']) ? (string)$data['url_overview'] : null;
        $this->url_profile = isset($data['url_profile']) ? (string)$data['url_profile'] : null;
        $this->url_waiver = isset($data['url_waiver']) ? (string)$data['url_waiver'] : null;
    }
}
