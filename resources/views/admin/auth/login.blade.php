<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Goat-In</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="auth-layout" style="background: linear-gradient(135deg, var(--text-dark) 0%, var(--brown) 100%);">
        <div class="auth-card">
            <div class="logo" style="color: var(--brown);">🐐 Admin Portal</div>
            <h2 class="text-center" style="color: var(--text-dark);">Login Admin</h2>
            <p class="text-center mb-2" style="color: var(--text-light);">Manajemen sistem Goat-In.</p>
            
            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-secondary" style="width: 100%;">Login Admin</button>
            </form>
            
            <p class="text-center mt-2"><a href="{{ route('customer.login') }}" style="color: var(--text-light); font-size: 0.9rem;">Kembali ke Portal Pelanggan</a></p>
        </div>
    </div>
</body>
</html>
