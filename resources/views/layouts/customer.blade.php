<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Goatin - @yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
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
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Manrope', sans-serif; background-color: #f9f9f9; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.filled {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    <!-- Existing styles for backward compatibility -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col">
    @include('partials.customer.navbar')

    @yield('content')

    @include('partials.customer.footer')
</body>
</html>
