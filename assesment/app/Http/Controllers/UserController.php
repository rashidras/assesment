<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Repositories\User\UserRepository as UserRepo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** 
     * View Users
     *
     * @param Request $request
     * @param UserRepo $userRepo
     * @return void
     */
    public function viewUser(Request $request, UserRepo $userRepo)
    {
        $users = $userRepo->getUser()->all();
        if ($users)
            return view("welcome", compact('users'));
    }

    /** 
     * Search Users
     *
     * @param Request $request
     * @return void
     */
    public function search(Request $request) {
        $keyword = $request->get('search');

        $users = User::where('name', 'like', '%' . $keyword . '%')
        ->orWhereHas('department', function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        })
        ->orWhereHas('designation', function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        })
        ->get();
        $returnHTML = view('searchResult')->with('users', $users)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    
}
