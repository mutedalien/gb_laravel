<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function loginVK() {

        if (Auth::check()) {
            return redirect()->route('home');
        }

        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK(UserRepository $userRepository) {
        if (!Auth::check()) {
            $user = Socialite::with('vkontakte')->user();
            $userInSysem = $userRepository->getUserBySocId($user, 'vk');

            Auth::login($userInSysem);

        }
        return redirect()->route('home');

    }

    public function loginGit() {

        if (Auth::check()) {
            return redirect()->route('home');
        }

        return Socialite::with('github')->redirect();
    }

    public function responseGit(UserRepository $userRepository) {
        if (!Auth::check()) {
            $user = Socialite::with('github')->user();
            $userInSysem = $userRepository->getUserBySocId($user, 'git');

            Auth::login($userInSysem);

        }
        return redirect()->route('home');

    }
}
