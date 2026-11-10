<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        // Menangkap data username dari request parameter form login
        $username = $request->input('username', 'Gamer');

        $stats = [
            'total_unit' => 6,
            'unit_tersedia' => 3,
            'unit_disewa' => 2,
            'unit_maintenance' => 1
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->input('username', 'Gamer');

        // Data array konsol PlayZone untuk di-render dengan @foreach
        $consoles = [
            [
                'kode' => 'PS5-VIP-01',
                'nama' => 'VIP Station Alpha',
                'tipe' => 'PlayStation 5',
                'tarif' => 25000,
                'status' => 'Tersedia',
                'game_favorit' => 'EA FC 25, God of War Ragnarok',
                'jadwal' => 'Ruangan kosong, siap sewa langsung'
            ],
            [
                'kode' => 'PS5-VIP-02',
                'nama' => 'VIP Station Bravo',
                'tipe' => 'PlayStation 5',
                'tarif' => 25000,
                'status' => 'Dipakai',
                'game_favorit' => 'Black Myth: Wukong',
                'jadwal' => '18:00 - 21:00 WIB'
            ],
            [
                'kode' => 'PS4-REG-01',
                'nama' => 'Reguler Station 01',
                'tipe' => 'PlayStation 4 Pro',
                'tarif' => 12000,
                'status' => 'Tersedia',
                'game_favorit' => 'GTA V, PES 2021 Update',
                'jadwal' => 'Ruangan kosong, siap sewa langsung'
            ],
            [
                'kode' => 'PS4-REG-02',
                'nama' => 'Reguler Station 02',
                'tipe' => 'PlayStation 4 Pro',
                'tarif' => 12000,
                'status' => 'Dipakai',
                'game_favorit' => 'Naruto Shippuden Storm 4',
                'jadwal' => '19:30 - 22:30 WIB'
            ],
            [
                'kode' => 'PS4-REG-03',
                'nama' => 'Reguler Station 03',
                'tipe' => 'PlayStation 4 Slim',
                'tarif' => 10000,
                'status' => 'Tersedia',
                'game_favorit' => 'Gran Turismo 7',
                'jadwal' => 'Ruangan kosong, siap sewa langsung'
            ],
            [
                'kode' => 'PS5-VIP-03',
                'nama' => 'VIP Station Delta',
                'tipe' => 'PlayStation 5',
                'tarif' => 25000,
                'status' => 'Maintenance',
                'game_favorit' => 'Tekken 8',
                'jadwal' => 'Servis Stik DualSense'
            ]
        ];

        return view('pengelolaan', compact('username', 'consoles'));
    }

    public function profile(Request $request)
    {
        $username = $request->input('username', 'Gamer');

        $profile = [
            'username' => $username,
            'email' => strtolower(str_replace(' ', '', $username)) . '@lobby.id',
            'role' => 'Member Rental VIP',
            'member_since' => 'November 2026',
            'saldo_koin' => '75.000',
            'jam_bermain' => '42 Jam'
        ];

        return view('profile', compact('username', 'profile'));
    }
}