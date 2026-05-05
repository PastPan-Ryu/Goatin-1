<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Goatin - Register</title>
    <!-- Google Fonts: Manrope -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed": "#00210f",
                        "on-surface": "#1a1c1c",
                        "surface-variant": "#e2e2e2",
                        "surface-container-low": "#f3f3f3",
                        "background": "#f9f9f9",
                        "inverse-primary": "#9dd3aa",
                        "surface-container-high": "#e8e8e8",
                        "on-secondary-fixed-variant": "#215034",
                        "secondary-container": "#bbefc9",
                        "on-background": "#1a1c1c",
                        "outline": "#717971",
                        "secondary-fixed": "#bbefc9",
                        "secondary-fixed-dim": "#a0d2ae",
                        "primary-fixed-dim": "#9dd3aa",
                        "on-tertiary-fixed-variant": "#753401",
                        "error-container": "#ffdad6",
                        "error": "#ba1a1a",
                        "secondary": "#3a684a",
                        "on-primary-fixed-variant": "#1e5031",
                        "on-error-container": "#93000a",
                        "primary-container": "#4a7c59",
                        "surface-bright": "#f9f9f9",
                        "surface-container": "#eeeeee",
                        "primary": "#316342",
                        "outline-variant": "#c1c9bf",
                        "inverse-on-surface": "#f1f1f1",
                        "tertiary-fixed-dim": "#ffb68c",
                        "surface-tint": "#376847",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#321200",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#e2e2e2",
                        "on-primary": "#ffffff",
                        "surface-dim": "#dadada",
                        "tertiary-fixed": "#ffdbc9",
                        "on-secondary-container": "#406e50",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-container": "#fff5f1",
                        "inverse-surface": "#2f3131",
                        "tertiary": "#8c4513",
                        "tertiary-container": "#aa5d2a",
                        "surface": "#f9f9f9",
                        "on-primary-container": "#e1ffe5",
                        "on-surface-variant": "#414942",
                        "on-error": "#ffffff",
                        "primary-fixed": "#b9efc5",
                        "on-primary-fixed": "#00210e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-xs": "4px",
                        "margin-mobile": "16px",
                        "stack-sm": "8px",
                        "gutter": "24px",
                        "stack-lg": "32px",
                        "unit": "8px",
                        "container-max": "1280px",
                        "stack-md": "16px",
                        "stack-xl": "64px",
                        "margin-desktop": "40px"
                    },
                    "fontFamily": {
                        "body-lg": ["Manrope"],
                        "caption": ["Manrope"],
                        "body-md": ["Manrope"],
                        "h3": ["Manrope"],
                        "h1": ["Manrope"],
                        "h2": ["Manrope"],
                        "label-sm": ["Manrope"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                        "caption": ["12px", {"lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "500"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                        "h3": ["24px", {"lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "600"}],
                        "h1": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "h2": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface text-on-surface font-body-md text-body-md antialiased min-h-screen flex items-center justify-center p-4">

    <!-- Centered Form Area -->
    <div class="w-full max-w-md bg-surface-container-lowest p-8 sm:p-10 rounded-2xl shadow-[0_8px_30px_rgba(74,124,89,0.12)] border border-surface-variant">
        
        <!-- Brand Logo -->
        <div class="flex items-center justify-center gap-stack-sm mb-stack-xl">
            <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container">
                <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">pets</span>
            </div>
            <span class="font-h2 text-h2 text-primary">Goatin</span>
        </div>
        
        <!-- Welcome Text -->
        <div class="mb-stack-lg text-center">
            <h1 class="font-h2 text-h2 text-on-surface mb-stack-xs">Buat Akun</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Daftarkan diri Anda untuk mulai memantau ternak.</p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="mb-4 p-4 bg-error-container text-on-error-container rounded-lg">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Register Form -->
        <form action="{{ route('register.submit') }}" class="space-y-stack-md" method="POST">
            @csrf
            <!-- Name Input -->
            <div>
                <label class="block font-label-sm text-label-sm text-on-surface-variant mb-stack-xs" for="name">
                    Nama Lengkap
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-outline-variant">badge</span>
                    </div>
                    <input class="block w-full pl-10 pr-3 py-3 border border-outline-variant rounded-lg bg-surface-container-low text-on-surface placeholder-outline-variant focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors sm:text-sm" id="name" name="name" placeholder="Masukkan nama lengkap" required="" type="text" value="{{ old('name') }}"/>
                </div>
            </div>

            <!-- Email Input -->
            <div>
                <label class="block font-label-sm text-label-sm text-on-surface-variant mb-stack-xs" for="email">
                    Alamat Email
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-outline-variant">mail</span>
                    </div>
                    <input class="block w-full pl-10 pr-3 py-3 border border-outline-variant rounded-lg bg-surface-container-low text-on-surface placeholder-outline-variant focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors sm:text-sm" id="email" name="email" placeholder="contoh@email.com" required="" type="email" value="{{ old('email') }}"/>
                </div>
            </div>
            
            <!-- Password Input -->
            <div>
                <label class="block font-label-sm text-label-sm text-on-surface-variant mb-stack-xs" for="password">
                    Password
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-outline-variant">lock</span>
                    </div>
                    <input autocomplete="new-password" class="block w-full pl-10 pr-3 py-3 border border-outline-variant rounded-lg bg-surface-container-low text-on-surface placeholder-outline-variant focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors sm:text-sm" id="password" name="password" placeholder="Minimal 8 karakter" required="" type="password"/>
                </div>
            </div>

            <!-- Password Confirmation Input -->
            <div>
                <label class="block font-label-sm text-label-sm text-on-surface-variant mb-stack-xs" for="password_confirmation">
                    Konfirmasi Password
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-outline-variant">lock_reset</span>
                    </div>
                    <input autocomplete="new-password" class="block w-full pl-10 pr-3 py-3 border border-outline-variant rounded-lg bg-surface-container-low text-on-surface placeholder-outline-variant focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors sm:text-sm" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password" required="" type="password"/>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="pt-2">
                <button class="w-full flex justify-center items-center gap-2 py-3 px-4 border border-transparent rounded-lg font-label-sm text-label-sm text-on-primary bg-primary hover:bg-primary-container hover:text-on-primary-container focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors shadow-[0_4px_20px_rgba(74,124,89,0.1)]" type="submit">
                    Daftar Sekarang
                    <span class="material-symbols-outlined text-sm">person_add</span>
                </button>
            </div>
        </form>

        <!-- Login Link -->
        <div class="mt-stack-md text-center">
            <p class="font-body-md text-body-md text-on-surface-variant">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-primary font-semibold hover:text-primary-container hover:underline transition-colors">Masuk di sini</a>
            </p>
        </div>
    </div>
    
</body>
</html>
