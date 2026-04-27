<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vidici - Modern Platform</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        meteor: {
                            background: '#0a0a0a',
                            surface: '#111111',
                            border: '#222222',
                            accent: '#f24e1e',
                            muted: '#888888',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans antialiased bg-meteor-background text-white">
    {{ $slot }} 
    </body>
</html>