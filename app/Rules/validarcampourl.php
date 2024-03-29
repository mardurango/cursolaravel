<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\admin\menu;

class validarcampourl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($value <> '#'){
            $menu=menu::where($attribute, $value)->get();
            return $menu->IsEmpty();
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Esta url ya esta asignada';
    }
}
