<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

trait UploadAvatar
{
    public function upAvatar($file, $checkFile, $user = null) {
        $avatarName = is_null($user) ? null : $user->getOriginal('avatar');

        if ($checkFile) {
            $path = Storage::disk('public')->put('avatars', $file);
            if ($user) {
                if ($user->getOriginal('avatar') && File::exists(public_path($user->avatar))) {
                    Storage::disk('public')->delete($user->avatar);
                }
            }

            $avatarName = basename($path);
        }

        return $avatarName;
    }
}
