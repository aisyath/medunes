<?php  

class HomeController
{
    public function index()
    {
        // Simulasi data
        $data = [
            'title' => "Halaman Home",
            'isi' => 'auth',

        ];
        // Menampilkan view dengan data
        return view('admin.dashboard', $data);
        return view('admin.log', $data);
        return view('admin.mahasiswa', $data);
        return view('admin.dokter', $data);
        return view('admin.dokterspesialis', $data);

     }
}

// // Jalankan controller
 $controller = new HomeController();
 $controller->index();
