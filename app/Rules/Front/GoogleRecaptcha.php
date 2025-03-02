<?php

namespace App\Rules\Front;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;

class GoogleRecaptcha implements Rule
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
        if (config('services.recaptcha.RECAPTCHA_ENABLE') == true) {
            return $this->verify($value);
        }
        return true;
    }

    private function verify(string $token = null): bool
    {
        // 送 api 以進行驗證
        $url = config('services.recaptcha.RECAPTCHA_URL');
        $response = (new Client())->request('POST', $url, [
            'form_params' => [
                'secret' => config('services.recaptcha.RECAPTCHA_SECRET_KEY'),
                'response' => $token,
            ],
        ]);
        $code = $response->getStatusCode();
        $content = json_decode($response->getBody()->getContents());
        return $code == 200 && $content->success == true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('front.contact.recaptcha.error');
    }
}
