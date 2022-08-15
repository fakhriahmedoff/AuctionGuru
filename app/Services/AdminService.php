<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Requests\backend\AdminSaveRequest;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;

class AdminService
{
    public function updateUserDetails(Authenticatable $user, AdminSaveRequest $request): void
    {
        $user->fill([
            'name' => $request->getName(),
            'email' => $request->getEmail(),
        ]);
        if ($request->getPassword()) {
            $user->fill([
                'password' => Hash::make($request->getPassword()),
            ]);
        }

        if (!$user->save()) {
            throw new DomainException('User save failed');
        }
    }
}