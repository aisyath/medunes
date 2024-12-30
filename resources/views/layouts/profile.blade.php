<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- Tambahkan CSS atau link ke framework CSS seperti Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Profile</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Contoh untuk menampilkan avatar -->
                        <img src="{{ $user->avatar }}" class="img-fluid rounded-circle" alt="User Avatar">
                    </div>
                    <div class="col-md-8">
                        {{-- <h3>{{ $user->name }}</h3>
                        <p>Email: {{ $user->email }}</p>
                        <p>Phone: {{ $user->phone }}</p>
                        <p>Address: {{ $user->address }}</p> --}}
                        <!-- Tambahkan informasi lain sesuai kebutuhan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan JavaScript atau link ke framework JavaScript seperti Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
