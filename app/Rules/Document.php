<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Document implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^\d{8}-\d{1}$/', $value) || preg_match('/^\d{4}-\d{6}-\d{3}-\d{1}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute format is invalid.';
    }
}
