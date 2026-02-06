<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Blog')</title>
    <meta name="description" content="@yield('meta_description', 'Blog')">
    @hasSection('robots')
        <meta name="robots" content="@yield('robots')">
    @endif
    @hasSection('canonical')
        <link rel="canonical" href="@yield('canonical')">
    @endif
    @hasSection('og_title')
        <meta property="og:title" content="@yield('og_title')">
    @endif
    @hasSection('og_description')
        <meta property="og:description" content="@yield('og_description')">
    @endif
    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
    @endif
    <style>
        :root {
            color-scheme: light;
            --bg: #f6f4ef;
            --ink: #0f0f0f;
            --muted: #6f6b67;
            --card: #ffffff;
            --accent: #b03a2e;
            --accent-2: #1f6f8b;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "IBM Plex Serif", "Georgia", serif;
            background: linear-gradient(180deg, #efece6 0%, #f6f4ef 40%, #f9f7f2 100%);
            color: var(--ink);
        }
        a { color: inherit; text-decoration: none; }
        .page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .topbar {
            padding: 32px 20px 12px;
            border-bottom: 1px solid #e6e1d9;
        }
        .topbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }
        .brand {
            font-family: "Space Grotesk", "Arial", sans-serif;
            font-size: 22px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .nav {
            display: flex;
            align-items: center;
            gap: 16px;
            font-family: "Space Grotesk", "Arial", sans-serif;
            font-size: 13px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }
        .nav a {
            padding: 6px 10px;
            border-radius: 999px;
            border: 1px solid transparent;
            transition: border-color 0.2s ease, color 0.2s ease;
        }
        .nav a:hover {
            border-color: #e6e1d9;
            color: var(--accent);
        }
        .container {
            width: min(1100px, 92vw);
            margin: 0 auto;
        }
        .hero {
            padding: 32px 0 12px;
        }
        .hero h1 {
            font-family: "Space Grotesk", "Arial", sans-serif;
            font-size: clamp(32px, 5vw, 54px);
            margin: 0 0 12px;
        }
        .hero p {
            color: var(--muted);
            max-width: 720px;
            line-height: 1.6;
            margin: 0;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
            margin: 24px 0 40px;
        }
        .card {
            background: var(--card);
            border: 1px solid #efe9df;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }
        .thumb {
            height: 170px;
            background: #efe9df;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--muted);
            font-size: 14px;
        }
        .thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-body {
            padding: 16px 18px 18px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1;
        }
        .meta {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            font-size: 12px;
            color: var(--muted);
        }
        .tag {
            padding: 4px 8px;
            border-radius: 999px;
            background: #f2efe9;
            border: 1px solid #e6e1d9;
        }
        .card h2 {
            font-size: 20px;
            margin: 0;
            line-height: 1.2;
        }
        .excerpt {
            color: var(--muted);
            line-height: 1.6;
            margin: 0;
        }
        .readmore {
            margin-top: auto;
            display: inline-flex;
            gap: 8px;
            align-items: center;
            font-family: "Space Grotesk", "Arial", sans-serif;
            color: var(--accent);
        }
        .pagination {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }
        .pagination a, .pagination span {
            padding: 8px 12px;
            border-radius: 10px;
            border: 1px solid #e6e1d9;
            background: #fff;
            font-size: 14px;
        }
        .pagination .active {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
        }
        .footer {
            margin-top: auto;
            padding: 20px 0 40px;
            color: var(--muted);
            font-size: 13px;
        }
        .post-hero {
            padding: 24px 0 8px;
        }
        .post-title {
            font-family: "Space Grotesk", "Arial", sans-serif;
            font-size: clamp(30px, 4.5vw, 48px);
            margin: 0 0 12px;
        }
        .post-content {
            line-height: 1.8;
            font-size: 18px;
        }
        .post-content img {
            max-width: 100%;
            border-radius: 12px;
        }
        .form-card {
            background: var(--card);
            border: 1px solid #efe9df;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }
        .form-field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .form-field.full {
            grid-column: 1 / -1;
        }
        .form-field label {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--muted);
        }
        .form-field input,
        .form-field textarea {
            border: 1px solid #e6e1d9;
            border-radius: 14px;
            padding: 12px 14px;
            font-family: inherit;
            font-size: 16px;
            background: #fff;
        }
        .form-field textarea {
            min-height: 170px;
            resize: vertical;
        }
        .form-actions {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px;
        }
        .btn {
            background: var(--accent);
            color: #fff;
            border: 0;
            padding: 12px 20px;
            border-radius: 999px;
            font-family: "Space Grotesk", "Arial", sans-serif;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            cursor: pointer;
        }
        .notice {
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 16px;
            background: #f2efe9;
            color: var(--ink);
            border: 1px solid #e6e1d9;
        }
        .notice.success {
            background: #ecf4f1;
            border-color: #cfe2da;
            color: #235b4d;
        }
        .notice.error {
            background: #f8eded;
            border-color: #e8c9c9;
            color: #6b2b2b;
        }
        .error {
            color: #8a2f2f;
            font-size: 12px;
            display: block;
        }
        @media (max-width: 720px) {
            .thumb { height: 140px; }
            .form-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="topbar">
            <div class="container topbar-inner">
                <a class="brand" href="{{ route('blog.index') }}">PGRM Blog</a>
                <nav class="nav">
                    <a href="{{ route('contact.create') }}">Kontakt</a>
                </nav>
            </div>
        </header>

        <main class="container">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container">
                © {{ date('Y') }} PGRM Blog
            </div>
        </footer>
    </div>
</body>
</html>
