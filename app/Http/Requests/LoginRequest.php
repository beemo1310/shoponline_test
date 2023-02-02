<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use App\Models\Admin;
class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'admin_name' => 'required',
            'password' => 'required'
        ];
    }
    public function getCredentials()
    {
        // The form field for providing username or password
        // have name of "username", however, in order to support
        // logging users in with both (username and email)
        // we have to check if user has entered one or another
        $email = $this->get('admin_name');

        if ($this->isEmail($email)) {
            return [
                'email' => $email,
                'password' => $this->get('password')
            ];
        }

        return $this->only('admin_name', 'password');
    }
    private function isEmail($param)
    {
        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(
            ['admin_name' => $param],
            ['admin_name' => 'email']
        )->fails();
    }
}
