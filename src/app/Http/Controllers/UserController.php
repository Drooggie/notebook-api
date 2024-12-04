<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            "data" => new UserResource($request->user()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRegisterRequest $request)
    {
        $user_attributes = $request->validated();

        $created_user = User::create($user_attributes);

        return response()->json([
            "message" => "You successfully created User",
            "data" => new UserResource($created_user),
        ]);
    }
}
