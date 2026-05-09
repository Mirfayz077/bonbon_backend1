<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('admin.bonbon');
    }
    public function menu(){
        // dd('menu');
        return view('menu.menu');
    }

    public function qr_code($table = null)
    {
        $table = $table !== null ? trim((string) $table) : null;
        $siteBaseUrl = 'https://bonbon.uz';
        $telegramBotUrl = 'https://t.me/your_bot_username';

        return view('qr.qr_code', [
            'table' => $table,
            'siteUrl' => $siteBaseUrl . ($table ? '?table=' . rawurlencode($table) : ''),
            'botUrl' => $telegramBotUrl . ($table ? '?start=table_' . rawurlencode($table) : ''),
            'qrValue' => $siteBaseUrl . '/qr' . ($table ? '/' . rawurlencode($table) : ''),
        ]);
    }
}
