<?php
namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadAvatar
{
    public function upAvatar($file, $checkFile, $flagUpload = null) {
        $avatarName = null;
        if ($checkFile) {
            $path = Storage::disk('public')->put('avatars', $file);

            if ($flagUpload) {
                if ($user->getOriginal('avatar') && Storage::disk('public')->has($user->getOriginal('avatar'))) {
                    Storage::disk('public')->delete($user->avatar);
                }
            }

            $avatarName = basename($path);
        }

        return $avatarName;
    }
}
