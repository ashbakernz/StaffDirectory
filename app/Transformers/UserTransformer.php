<?php

namespace App\Transformers;

use App\User;

class UserTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'email' => $user->email,
            'avatar' => $user->avatar(),
        ];
    }
}
