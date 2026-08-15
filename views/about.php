<?php
$message = $message ?? '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>À propos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 min-h-screen">
    <header class="bg-indigo-700 text-white">
        <div class="max-w-4xl mx-auto px-6 py-10">
            <h1 class="text-3xl font-bold">À propos</h1>
            <p class="mt-2 text-indigo-100">Mini-application à l'architecture de Laravel.</p>
            <nav class="mt-4 flex gap-3 text-sm">
                <a href="<?= $base ?? '.' ?>" class="bg-white/10 px-3 py-1.5 rounded-lg hover:bg-white/20">Accueil</a>
                <a href="<?= ($base ?? '.') . '/books' ?>" class="bg-white/10 px-3 py-1.5 rounded-lg hover:bg-white/20">Livres</a>
                <a href="<?= ($base ?? '.') . '/about' ?>" class="bg-white/10 px-3 py-1.5 rounded-lg hover:bg-white/20">À propos</a>
            </nav>
        </div>
    </header>
    <main class="max-w-4xl mx-auto px-6 py-10">
        <div class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-xl font-bold text-slate-800">À propos</h2>
            <p class="mt-2 text-slate-600"><?= htmlspecialchars($message) ?></p>
            <p class="mt-4 text-sm text-slate-500">
                Cette page illustre l'exercice guidé de l'atelier 17 : une nouvelle route
                <code class="bg-slate-100 px-1.5 py-0.5 rounded">GET /about</code> mappée vers
                <code class="bg-slate-100 px-1.5 py-0.5 rounded">HomeController@about</code>.
            </p>
        </div>
    </main>
</body>
</html>
