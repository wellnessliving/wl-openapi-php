<?php
namespace WlSdk;

/**
 * Possible types of the custom fields: text, checkbox, radio buttons, etc.
 * 
 * <b>!!! BE ATTENTIVE !!!</b>
 * 
 * When you add a new field type, do not forget to test synchronization with electronic mail list managers. Search for
 * other constants in this class. You need to add your new constant in bulk places where other constants are found.
 * 
 * Values:
 * - 2 (`CHECKBOX`): Checkbox field. The `s_value` for this type of field can be 1 if checkbox is checked and 0
 * otherwise.
 * - 5 (`GENERAL`): General field. Has its own format.
 * - 4 (`RADIO`): Radio buttons.
 * - 3 (`SELECT`): Drop-down menu.
 * - 1 (`TEXT`): One line text field.
 */
enum RsFieldTypeSid: int
{
    case CHECKBOX = 2;
    case GENERAL = 5;
    case RADIO = 4;
    case SELECT = 3;
    case TEXT = 1;
}
