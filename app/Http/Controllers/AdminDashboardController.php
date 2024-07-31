<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Site;
use App\Models\Team;
use App\Models\Service;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.dashboard', [
            'title' => 'Dashboard admin',
            'description' => null,
        ]);
    }

    public function pengaduan()
    {
        return view('dashboard.admin.pengaduan.pengaduan', [
            'title' => 'Pengaduan',
            'description' => 'Di halaman ini berisi kumpulan aduan yang dikirimkan oleh masyarakat',
            'pengaduan' => Pengaduan::with('user')->get(),
        ]);
    }

    public function pengaduan_read($id)
    {
        $pengaduan = Pengaduan::with(['pengaduancomment.user','user'])->where('id', $id)->first();
        return view('dashboard.admin.pengaduan.read', [
            'title' => 'Pengaduan - ' . $pengaduan->subject,
            'pengaduan' => $pengaduan,
            'description' => 'Di halaman ini merupakan detail dari pengaduan yang dikirimkan oleh masyarakat',
        ]);
    }

    public function pengaduan_finish($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = 'selesai';
        $pengaduan->save();

        return redirect()->back()->with('success', 'Status pengaduan berhasil berhasil diubah jadi selesai');
    }

    public function pengaduan_proses($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = 'proses';
        $pengaduan->save();

        return redirect()->back()->with('success', 'Status pengaduan berhasil berhasil diubah jadi proses');
    }

    public function pengaduan_menunggu($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->status = 'menunggu';
        $pengaduan->save();

        return redirect()->back()->with('success', 'Status pengaduan berhasil berhasil diubah jadi menunggu');
    }

    public function pengaduan_delete($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        return redirect()->back()->with('success', 'Pengaduan berhasil dihapus');
    }

    public function desa_info()
    {
        return view('dashboard.admin.site.info', [
            'title' => 'Info Desa',
            'description' => 'Di halaman ini berisi informasi tentang desa',
            'site' => Site::first(),
        ]);
    }

    public function desa_update_action(Request $request)
    {
        $site = Site::first();
        $site->name = isset($request->name) ? $request->name : $site->name;
        $site->short_description = isset($request->short_description) ? $request->short_description : $site->short_description;
        $site->description = isset($request->description) ? $request->description : $site->description;
        $site->address = isset($request->address) ? $request->address : $site->address;
        $site->latitude = isset($request->latitude) ? $request->latitude : $site->latitude;
        $site->longitude = isset($request->longitude) ? $request->longitude : $site->longitude;
        $site->phone = isset($request->phone) ? $request->phone : $site->phone;
        $site->email = isset($request->email) ? $request->email : $site->email;
        $site->facebook = isset($request->facebook) ? $request->facebook : $site->facebook;
        $site->instagram = isset($request->instagram) ? $request->instagram : $site->instagram;
        $site->video = isset($request->video) ? $request->video : $site->video;
        $site->visi = isset($request->visi) ? $request->visi : $site->visi;
        $site->misi = isset($request->misi) ? $request->misi : $site->misi;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/site'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/site/' . $rand.$file->getClientOriginalName();
        } else {
            $fileName = $site->image;
        }

        $site->image = $fileName;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/site'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/site/' . $rand.$file->getClientOriginalName();
        } else {
            $fileName = $site->logo;
        }

        $site->logo = $fileName;
        $site->save();

        return redirect()->back()->with('success', 'Informasi desa berhasil diubah');
    }

    public function desa_visimisi()
    {
        return view('dashboard.admin.site.visimisi', [
            'title' => 'Visi Misi Desa',
            'description' => 'Di halaman ini berisi visi dan misi desa',
            'site' => Site::first(),
        ]);
    }

    public function desa_contact()
    {
        return view('dashboard.admin.site.contact', [
            'title' => 'Kontak Desa',
            'description' => 'Di halaman ini berisi kontak desa',
            'site' => Site::first(),
        ]);
    }

    public function desa_team()
    {
        return view('dashboard.admin.site.team.team', [
            'title' => 'Sekretariat Desa',
            'description' => 'Di halaman ini berisi daftar sekretariat desa',
            'team' => Team::all(),
        ]);
    }

    public function desa_team_structure()
    {
        return view('dashboard.admin.site.team.structure', [
            'title' => 'Ubah Struktur Organisasi Desa',
            'description' => 'Di halaman ini anda bisa mengubah gambar struktur organisasi desa',
            'site' => Site::first(),
        ]);
    }

    public function desa_team_structure_action(Request $request)
    {
        $site = Site::first();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/team'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/team/' . $rand.$file->getClientOriginalName();
        } else {
            $fileName = $site->struktur;
        }
        $site->struktur = $fileName;
        $site->save();

        return redirect("/admin/desa/sekre")->with('success', 'Struktur Organisasi desa berhasil diubah');
    }

    public function desa_team_create()
    {
        return view('dashboard.admin.site.team.team_create', [
            'title' => 'Tambah Sekretariat Desa',
            'description' => 'Di halaman ini berisi form untuk menambahkan sekretariat desa',
        ]);
    }

    public function desa_team_create_action(Request $request)
    {
        $team = new Team;
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->instagram = $request->instagram;
        $team->whatsapp = $request->whatsapp;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/team'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/team/' . $rand.$file->getClientOriginalName();
        } else {
            $fileName = "/dashboard_assets/assets/images/users/1.jpg";
        }
        $team->image = $fileName;
        $team->save();

        return redirect("/admin/desa/sekre")->with('success', 'Sekretariat desa berhasil ditambahkan');
    }

    public function desa_team_delete($id)
    {
        $team = Team::find($id);
        $team->delete();

        return redirect()->back()->with('success', 'Sekretariat desa berhasil dihapus');
    }

    public function desa_team_update($id)
    {
        $team = Team::find($id);
        return view('dashboard.admin.site.team.team_update', [
            'title' => 'Ubah Sekretariat Desa '.$team->name,
            'description' => 'Di halaman ini berisi form untuk mengubah sekretariat desa',
            'team' => $team,
        ]);
    }

    public function desa_team_update_action(Request $request, $id)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->facebook = isset($request->facebook) ? $request->facebook : $request->facebook;
        $team->twitter = isset($request->twitter) ? $request->twitter : $request->twitter;
        $team->instagram = isset($request->instagram) ? $request->instagram : $request->instagram;
        $team->whatsapp = isset($request->whatsapp) ? $request->whatsapp : $request->whatsapp;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $rand = now()->getTimestamp()." ";
            $file->move(public_path('uploads/team'), $rand.$file->getClientOriginalName());
            $fileName = '/uploads/team/' . $rand.$file->getClientOriginalName();
        } else {
            $fileName = $team->image;
        }
        $team->image = $fileName;
        $team->save();

        return redirect("/admin/desa/sekre")->with('success', 'Sekretariat desa berhasil diubah');
    }

    public function desa_service()
    {
        return view('dashboard.admin.site.service.service', [
            'title' => 'Layanan Desa',
            'description' => 'Di halaman ini berisi daftar layanan desa',
            'services' => Service::all(),
        ]);
    }

    public function desa_service_delete($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->back()->with('success', 'Layanan desa berhasil dihapus');
    }

    public function desa_service_create()
    {
        return view('dashboard.admin.site.service.service_create', [
            'title' => 'Tambah Layanan Desa',
            'description' => 'Di halaman ini berisi form untuk menambahkan layanan desa',
        ]);
    }

    public function desa_service_create_action(Request $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->icon = $request->icon;
        $service->description = $request->description;
        $service->url = $request->url;
        $service->save();

        return redirect("/admin/desa/services")->with('success', 'Layanan desa berhasil ditambahkan');
    }

    public function desa_service_update($id)
    {
        $service = Service::find($id);
        return view('dashboard.admin.site.service.service_update', [
            'title' => 'Ubah Layanan Desa '.$service->name,
            'description' => 'Di halaman ini berisi form untuk mengubah layanan desa',
            'service' => $service,
        ]);
    }

    public function desa_service_update_action(Request $request, $id)
    {
        $service = Service::find($id);
        $service->name = $request->name;
        $service->icon = $request->icon;
        $service->description = $request->description;
        $service->url = $request->url;
        $service->save();

        return redirect("/admin/desa/services")->with('success', 'Layanan desa berhasil diubah');
    }
}