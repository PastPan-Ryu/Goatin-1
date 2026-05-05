<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Goatin Admin - @yield('title', 'Dashboard')</title>
    <!-- Fonts and Icons -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-bright": "#f9f9f9",
                    "on-secondary-container": "#406e50",
                    "inverse-surface": "#2f3131",
                    "tertiary-fixed-dim": "#ffb68c",
                    "on-primary-fixed": "#00210e",
                    "error-container": "#ffdad6",
                    "tertiary-fixed": "#ffdbc9",
                    "on-secondary": "#ffffff",
                    "on-secondary-fixed": "#00210f",
                    "background": "#f9f9f9",
                    "secondary-fixed": "#bbefc9",
                    "surface-container-highest": "#e2e2e2",
                    "on-tertiary-fixed": "#321200",
                    "surface-dim": "#dadada",
                    "inverse-primary": "#9dd3aa",
                    "on-primary-container": "#e1ffe5",
                    "on-primary": "#ffffff",
                    "surface-container-low": "#f3f3f3",
                    "on-primary-fixed-variant": "#1e5031",
                    "inverse-on-surface": "#f1f1f1",
                    "error": "#ba1a1a",
                    "primary": "#316342",
                    "secondary-fixed-dim": "#a0d2ae",
                    "on-tertiary-fixed-variant": "#753401",
                    "on-tertiary-container": "#fff5f1",
                    "tertiary": "#8c4513",
                    "primary-fixed-dim": "#9dd3aa",
                    "outline": "#717971",
                    "on-surface-variant": "#414942",
                    "surface": "#f9f9f9",
                    "surface-variant": "#e2e2e2",
                    "surface-container-lowest": "#ffffff",
                    "surface-tint": "#376847",
                    "primary-container": "#4a7c59",
                    "surface-container": "#eeeeee",
                    "primary-fixed": "#b9efc5",
                    "tertiary-container": "#aa5d2a",
                    "secondary-container": "#bbefc9",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#1a1c1c",
                    "on-error": "#ffffff",
                    "secondary": "#3a684a",
                    "on-secondary-fixed-variant": "#215034",
                    "outline-variant": "#c1c9bf",
                    "surface-container-high": "#e8e8e8",
                    "on-error-container": "#93000a",
                    "on-background": "#1a1c1c"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "16px",
                    "gutter": "24px",
                    "stack-xl": "64px",
                    "unit": "8px",
                    "stack-sm": "8px",
                    "container-max": "1280px",
                    "stack-xs": "4px",
                    "stack-lg": "32px",
                    "stack-md": "16px",
                    "margin-desktop": "40px"
            },
            "fontFamily": {
                    "h3": ["Manrope"],
                    "h2": ["Manrope"],
                    "body-md": ["Manrope"],
                    "body-lg": ["Manrope"],
                    "label-sm": ["Manrope"],
                    "h1": ["Manrope"],
                    "caption": ["Manrope"]
            },
            "fontSize": {
                    "h3": ["24px", {"lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "600"}],
                    "h2": ["32px", {"lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0", "fontWeight": "400"}],
                    "label-sm": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "h1": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "caption": ["12px", {"lineHeight": "1.4", "letterSpacing": "0", "fontWeight": "500"}]
            }
          }
        }
      }
    </script>
    <style>
        body { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined.fill { font-variation-settings: 'FILL' 1; }
        .ambient-shadow { box-shadow: 4px 4px 24px rgba(74, 124, 89, 0.1); }
        .ambient-shadow-hover:hover { box-shadow: 0px 8px 32px rgba(74, 124, 89, 0.15); transform: translateY(-2px); transition: all 0.3s ease; }
        
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background-color: #e2e2e2; border-radius: 10px; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md min-h-screen flex">
    
    <!-- Sidebar -->
    @include('partials.admin.sidebar')

    <!-- Main Content Wrapper -->
    <div class="flex-1 md:ml-64 flex flex-col min-h-screen">
        
        <!-- Top Navbar -->
        @include('partials.admin.navbar')
        
        <!-- Canvas / Page Content -->
        @yield('content')

    </div>
</body>
</html>
