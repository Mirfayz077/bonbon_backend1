<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.bonbon');
    }

    public function menu()
    {
        return view('menu.menu');
    }

    public function qrCode($table = null)
    {
        $table = $table !== null ? trim((string) $table) : null;

        return view('qr.qr_code', [
            'table' => $table,
            'siteUrl' => route('index'),
            'botUrl' => 'https://t.me/bonbon_uz_bot' . ($table ? '?start=table_' . rawurlencode($table) : ''),
            'qrValue' => route('qr', ['table' => $table]),
        ]);
    }
}
