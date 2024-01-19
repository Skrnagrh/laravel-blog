<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardCProfileController extends Controller
{
    public function index()
    {
        // Mendapatkan pengguna yang sedang login
        $user = auth()->user();

        // Mendapatkan profil yang sesuai dengan user_id pengguna yang sedang login
        $profile = Profile::where('user_id', $user->id)->first();

        return view('dashboard.profile.index', [
            'profile' => $profile,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
                'about' => 'nullable|string',
                'company' => 'nullable|string',
                'job' => 'nullable|string',
                'country' => 'nullable|string',
                'address' => 'nullable|string',
                'phone' => 'nullable|string',
                'email' => 'nullable|email',
                'twitter' => 'nullable|string',
                'facebook' => 'nullable|string',
                'instagram' => 'nullable|string',
                'linkedin' => 'nullable|string',
        ]);

        $profile = Profile::findOrFail($id);

        if ($profile->user_id !== auth()->id()) {
            return redirect()->route('profile.index')->with('error', 'You are not authorized to update this profile.');
        }

        $profile->update($request->all());

        $user = auth()->user();
        // if ($user->name !== $request->input('name')) {
        //     $user->update(['name' => $request->input('name')]);
        // }
        $dataToUpdate = [];

        if ($user->name !== $request->input('name')) {
            $dataToUpdate['name'] = $request->input('name');
        }

        if ($user->email !== $request->input('email')) {
            $dataToUpdate['email'] = $request->input('email');
        }

        if (!empty($dataToUpdate)) {
            $user->update($dataToUpdate);
        }

    if ($request->hasFile('profile_image')) {
        // Simpan gambar profil baru ke penyimpanan (storage)
        $imagePath = $request->file('profile_image')->store('profile_images', 'public');

        // Perbarui kolom 'profile_image' dalam tabel profil dengan path yang baru
        $profile->update(['profile_image' => $imagePath]);

        // Perbarui kolom 'profile_image' dalam tabel pengguna (user) dengan path yang baru
        $user->update(['profile_image' => $imagePath]);
    }

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
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
