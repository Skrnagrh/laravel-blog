<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class DashboardCProfileController extends Controller
{
    // public function index()
    // {
    //     // Mendapatkan pengguna yang sedang login
    //     $user = auth()->user();

    //     // Mendapatkan profil yang sesuai dengan user_id pengguna yang sedang login
    //     $profile = User::where('user_id', $user->id)->first();

    //     return view('dashboard.profile.index', [
    //         'profile' => $profile,
    //     ]);
    // }
    public function index()
    {
        $user = auth()->user();
        $posts = $user->posts;
        return view('dashboard.profile.index', [
            'profile' => $user,
            'posts' => $posts,
        ]);
    }


public function update(Request $request, $id)
{

    $request->validate([
        'name' => 'required|string',
        'email' => 'nullable|email',
        'about' => 'nullable|string',
        'company' => 'nullable|string',
        'job' => 'nullable|string',
        'country' => 'nullable|string',
        'address' => 'nullable|string',
        'phone' => 'nullable|string',
        'twitter' => 'nullable|string',
        'facebook' => 'nullable|string',
        'instagram' => 'nullable|string',
        'linkedin' => 'nullable|string',
    ]);

    $user = User::findOrFail($id);

    if (request()->hasFile('profile_image')) {
        if ($user->profile_image && file_exists(storage_path('app/public/profile_images/' . $user->profile_image))) {
            Storage::delete('app/public/profile_images/' . $user->profile_image);
        }

        $file = $request->file('profile_image');
        $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
        $request->profile_image->move(storage_path('app/public/profile_images'), $fileName);
        $user->profile_image = $fileName;
    }

    if (!is_null($request->password)) {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'about' => $request->about,
            'company' => $request->company,
            'job' => $request->job,
            'country' => $request->country,
            'address' => $request->address,
            'phone' => $request->phone,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'password' => Hash::make($request->password),
        ]);
    } else {
        $user->update([
            'name' => $request->name,
            'about' => $request->about,
            'email' => $request->email,
            'company' => $request->company,
            'job' => $request->job,
            'country' => $request->country,
            'address' => $request->address,
            'phone' => $request->phone,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);
    }

    if ($user) {
        return redirect()
            ->route('profile.index')
            ->with([
                'success' => 'Data anda berhasil diubah'
            ]);
    } else {
        return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'Data anda gagal diubah'
            ]);
    }
}


    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        if ($user) {
            return redirect()
                ->route('profile.index')
                ->with([
                    'success' => 'Password anda berhasil diubah'
                ]);
        } else {
            return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'Password anda gagal dibuat'
            ]);
        }
    }


    public function show($username)
    {
        // Ambil informasi pengguna berdasarkan nama pengguna
        $user = User::where('name', $username)->first();

        if (!$user) {
            // Jika pengguna tidak ditemukan, Anda bisa mengambil langkah-langkah yang sesuai.
            return redirect()->route('dashboard.index')->with('error', 'Pengguna tidak ditemukan.');
        }

        // Ambil profil berdasarkan user_id
        $profile = Profile::where('user_id', $user->id)->first();

        if (!$profile) {
            // Jika profil tidak ditemukan, Anda bisa mengambil langkah-langkah yang sesuai.
            return redirect()->route('dashboard.index')->with('error', 'Profil tidak ditemukan.');
        }

        return view('dashboard.comment.showprofile', [
            'profile' => $profile,
        ]);
    }

}
