<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Laravel POS Foundations'); ?></title>
    <style>
        :root { --ink:#07111f; --panel:#0d1b2d; --panel-2:#12263c; --cyan:#39d9ff; --green:#72f1b8; --muted:#8da4b8; --line:#1e3a52; --text:#e6f4ff; }
        * { box-sizing:border-box; }
        body { margin:0; font-family:Arial, Helvetica, sans-serif; color:var(--text); background:var(--ink); background-image:linear-gradient(rgba(57,217,255,.035) 1px, transparent 1px), linear-gradient(90deg, rgba(57,217,255,.035) 1px, transparent 1px); background-size:34px 34px; }
        nav { background:rgba(7,17,31,.94); border-bottom:1px solid var(--line); color:#fff; padding:17px 7%; display:flex; align-items:center; justify-content:space-between; gap:20px; position:sticky; top:0; z-index:5; backdrop-filter:blur(10px); }
        nav strong { color:var(--cyan); font-size:1.05rem; letter-spacing:1.2px; text-transform:uppercase; }
        nav strong::before { content:'◈ '; color:var(--green); }
        nav div { display:flex; flex-wrap:wrap; gap:7px; }
        nav a { color:#c8dbea; text-decoration:none; padding:8px 12px; border:1px solid transparent; border-radius:5px; font-size:.92rem; }
        nav a:hover, nav a.active { color:#fff; border-color:#27637a; background:#123148; box-shadow:0 0 12px rgba(57,217,255,.12); }
        main { width:min(1080px, 86%); margin:48px auto; }
        .hero, .panel { background:linear-gradient(145deg, rgba(18,38,60,.97), rgba(9,24,40,.97)); border:1px solid var(--line); border-radius:12px; padding:34px; box-shadow:0 12px 38px rgba(0,0,0,.24); position:relative; overflow:hidden; }
        .hero::after, .panel::after { content:''; width:180px; height:180px; border:1px solid rgba(57,217,255,.12); border-radius:50%; position:absolute; right:-80px; top:-80px; pointer-events:none; }
        h1 { margin-top:0; color:#fff; font-size:2.25rem; letter-spacing:-.5px; }
        h1::before { content:'>'; color:var(--green); margin-right:9px; }
        h2 { color:var(--cyan); }
        p { line-height:1.65; color:#b8cbd9; }
        code { color:var(--green); background:#071521; padding:2px 6px; border-radius:4px; }
        .button { display:inline-block; background:var(--cyan); color:#04101b; font-weight:bold; padding:12px 17px; border-radius:5px; text-decoration:none; margin-top:14px; box-shadow:0 0 18px rgba(57,217,255,.18); }
        .button:hover { background:var(--green); box-shadow:0 0 22px rgba(114,241,184,.23); }
        .signal { display:inline-flex; align-items:center; gap:8px; color:var(--green); font-size:.8rem; letter-spacing:1px; text-transform:uppercase; margin-bottom:12px; }
        .signal::before { content:''; width:8px; height:8px; border-radius:50%; background:var(--green); box-shadow:0 0 10px var(--green); }
        table { width:100%; border-collapse:separate; border-spacing:0; margin-top:22px; overflow:hidden; background:#0a1727; border:1px solid var(--line); border-radius:7px; }
        th, td { border-bottom:1px solid var(--line); padding:14px 15px; text-align:left; }
        th { background:#123148; color:var(--cyan); font-size:.82rem; letter-spacing:.7px; text-transform:uppercase; }
        tr:last-child td { border-bottom:0; }
        tr:nth-child(even) td { background:rgba(18,38,60,.48); }
        tr:hover td { background:rgba(57,217,255,.07); }
        .badge { display:inline-block; padding:4px 9px; border-radius:4px; font-size:.8rem; background:rgba(114,241,184,.12); border:1px solid rgba(114,241,184,.4); color:var(--green); }
        .badge.inactive { background:rgba(255,111,111,.1); border-color:rgba(255,111,111,.4); color:#ff9d9d; }
        footer { text-align:center; color:#6e889d; padding:20px; font-size:.85rem; }
        @media (max-width:700px) { nav { align-items:flex-start; flex-direction:column; } main { width:92%; margin:25px auto; } .hero,.panel { padding:23px; } h1 { font-size:1.75rem; } table { display:block; overflow-x:auto; white-space:nowrap; font-size:.9rem; } }
    </style>
</head>
<body>
    <nav>
        <strong>POS Security Console</strong>
        <div>
            <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a>
            <a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">About</a>
            <a href="<?php echo e(route('customers')); ?>" class="<?php echo e(request()->routeIs('customers') ? 'active' : ''); ?>">Customers</a>
            <a href="<?php echo e(route('users')); ?>" class="<?php echo e(request()->routeIs('users') ? 'active' : ''); ?>">Users</a>
        </div>
    </nav>
    <main><?php echo $__env->yieldContent('content'); ?></main>
    <footer>IT0049 Web System Technologies &middot; Laravel Foundations Activity</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\IT0049 TFA5 From Zero to Four Pages\resources\views/layouts/app.blade.php ENDPATH**/ ?>