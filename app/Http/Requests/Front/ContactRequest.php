<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'      =>  'required|string',
            'area_id'      =>  'required|string',
            'question'  =>  'required|string',
            'country'   =>  'required|string',
            'phone'     =>  'nullable|string',
            'email'     =>  'required|email',
            'content'   =>  'required|string',
            'captcha'   =>  'required|string|captcha',
        ];
    }

    public function attributes() {
        return [
            'name'      =>  __('front.contact.name'),
            'area_id'      =>  __('front.contact.area'),
            'question'  =>  __('front.contact.question'),
            'country'   =>  __('front.contact.country'),
            'phone'     =>  __('front.contact.phone'),
            'email'     =>  __('front.contact.email'),
            'content'   =>  __('front.contact.content'),
            'captcha'   =>  __('front.contact.captcha'),
        ];
    }
}
