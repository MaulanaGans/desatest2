<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\PengaduanComment;
use App\Models\User;
use Carbon\Carbon;

class MasyarakatDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.masyarakat.dashboard', [
            'title' => 'Dashboard Masyarakat',
            'description' => null,
        ]);
    }

    public function pengaduan()
    {
        return view('dashboard.masyarakat.pengaduan.pengaduan', [
            'title' => 'Usulan Terkirim',
            'description' => 'Di halaman ini masyarakat bisa mengirimkan usulan kepada kepala desa atau instansi terkait',
            'pengaduan' => Pengaduan::with('user')->where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function pengaduan_create()
    {
        return view('dashboard.masyarakat.pengaduan.create', [
            'title' => 'Kirim Usulan',
            'description' => 'Di halaman ini masyarakat bisa mengirimkan usulan kepada kepala desa atau instansi terkait',
        ]);
    }

    public function pengaduan_create_action(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/pengaduan'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/pengaduan/' . $rand.$file->getClientOriginalName();
        } else {
            $fileName = null;
        }

        Pengaduan::create([
            'subject' => $request->subject,
            'description' => $request->description,
            'status' => 'menunggu',
            'user_id' => auth()->user()->id,
            'file' => $fileName,
        ]);

        return redirect('/masyarakat/pengaduan')->with('success', 'Pengaduan berhasil dikirim');
    }

    public function pengaduan_finish($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = 'selesai';
        $pengaduan->save();

        return redirect('/masyarakat/pengaduan')->with('success', 'Pengaduan berhasil diselesaikan');
    }

    public function pengaduan_banding($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = 'banding';
        $pengaduan->save();

        return redirect('/masyarakat/pengaduan')->with('success', 'Pengaduan berhasil dibandingkan');
    }

    public function pengaduan_read($id)
    {
        $pengaduan = Pengaduan::with(['pengaduancomment.user','user'])->where('id', $id)->first();
        return view('dashboard.masyarakat.pengaduan.read', [
            'title' => 'Usulan - ' . $pengaduan->subject,
            'pengaduan' => $pengaduan,
            'description' => 'Di halaman ini masyarakat bisa melihat detail pengaduan yang telah dikirimkan',
        ]);
    }

    public function pengaduan_read_action(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/pengaduan'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/pengaduan/' . $rand.$file->getClientOriginalName();
        } else {
            $fileName = null;
        }

        PengaduanComment::create([
            'comment' => $request->comment,
            'pengaduan_id' => $id,
            'user_id' => auth()->user()->id,
            'file' => $fileName,
        ]);

        return redirect()->back()->with('success', 'Tanggapan pengaduan berhasil dikirim');
    }

    function layanan_surat() {
        return view('dashboard.masyarakat.layanan.surat', [
            'title' => 'Pembuatan Surat',
            'description' => 'Di halaman ini masyarakat bisa membuat surat',
        ]);
    }
}