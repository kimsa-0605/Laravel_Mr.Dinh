<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fake data
        $users = [
            [
                'id' => 1,
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@example.com',
                'created_at' => now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Trần Thị B',
                'email' => 'tranthib@example.com',
                'created_at' => now()->format('Y-m-d H:i:s'),
            ],
        ];

        return response()->json([
            'status' => true,
            'message' => 'Dữ liệu mẫu của người dùng!',
            'data' => $users
        ], 200);
    }
}
