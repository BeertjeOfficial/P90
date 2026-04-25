<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P90 API</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #05070a;
            /* Subtle grid background effect */
            background-image: 
                linear-gradient(to right, #0f1115 1px, transparent 1px),
                linear-gradient(to bottom, #0f1115 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .blue-glow {
            color: #60a5fa;
            text-shadow: 0 0 20px rgba(96, 165, 250, 0.4);
        }
        .card-bg {
            background-color: #0a0c10;
            border: 1px solid #1a1d23;
            transition: all 0.3s ease;
        }
        .card-bg:hover {
            border-color: #3b82f6;
            background-color: #0d1117;
        }
    </style>
</head>
<body class="text-gray-300 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="mb-6">
        <span class="bg-[#111827] border border-blue-900/50 text-[10px] text-blue-400 font-bold px-3 py-1 rounded-full uppercase tracking-widest">
            ● Live & Updated
        </span>
    </div>

    <div class="text-center mb-12">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
            <span class="blue-glow">Welcome to</span> P90
        </h1>
        <p class="text-gray-500 max-w-md mx-auto text-sm leading-relaxed">
            Access game offsets quickly and easily through our lightning-fast API endpoints.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full max-w-5xl">
        <?php
        $cards = [
            ['title' => 'offsets.hpp', 'desc' => 'C++ header file format (legacy)', 'icon' => '📄'],
            ['title' => 'offsets_structured.hpp', 'desc' => 'Structured C++ header for seamless integration', 'icon' => '📄'],
            ['title' => 'offsets.json', 'desc' => 'JSON format for universal compatibility', 'icon' => '{ }'],
            ['title' => 'fflags.hpp', 'desc' => 'FastFlag addresses for engine config and feature toggles', 'icon' => '🚩'],
            ['title' => 'Version', 'desc' => 'Check current version and track updates', 'icon' => '🏷️'],
            ['title' => 'Internal Offsets', 'desc' => 'Internal game offsets for advanced integration', 'icon' => '🔒'],
        ];

        foreach ($cards as $card): ?>
            <div class="card-bg p-8 rounded-xl cursor-pointer">
                <div class="bg-[#161b22] w-10 h-10 rounded-lg flex items-center justify-center mb-6 border border-gray-800">
                    <span class="text-blue-400 text-sm font-mono"><?php echo $card['icon']; ?></span>
                </div>
                <h3 class="text-white font-bold mb-2"><?php echo $card['title']; ?></h3>
                <p class="text-gray-500 text-xs leading-5">
                    <?php echo $card['desc']; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-16">
        <div class="bg-[#0a0c10] border border-gray-800 rounded-full px-4 py-1 flex items-center gap-2">
            <span class="text-gray-600 font-mono text-[10px]">multimap;</span>
            <span class="text-gray-400 font-mono text-[10px]">version-9d412f44a6fe4081</span>
        </div>
    </div>

    <div class="fixed bottom-4 right-4 text-gray-700 text-[10px] text-right">
        Activate Windows<br>
        <span class="text-[9px]">Go to Settings to activate Windows.</span>
    </div>

</body>
</html>