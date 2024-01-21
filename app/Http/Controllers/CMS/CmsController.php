<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Utils\ResponseUtil;

class CmsController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function sendResponse($result, $message = "")
    {
        return response()->json(ResponseUtil::makeResponse($result, $message), 200);
    }

    public function sendError($error, $code = 404, $message = "")
    {
        return response()->json(ResponseUtil::makeError($error, $message), $code);
    }

    public function sendSuccess($message)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
        ], 200);
    }


    protected function user() {
        if (!auth()->user()) {
            return false;
        }

        $user = User::find(auth()->user()->id);
        $user->role = $user->role;

        return collect([
            'user' => $user,
        ]);
    }
}
