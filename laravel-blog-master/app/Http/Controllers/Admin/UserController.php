<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::withCount('posts')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (auth()->user() == $user) {
            flash()->overlay("Удаление себя самого - не выход.");

            return redirect('/admin/users');
        }

        $user->delete();
        flash()->overlay('Пользователь удалён успешно.');

        return redirect('/admin/users');
    }
}
