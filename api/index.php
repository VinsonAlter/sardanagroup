<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="border border-primary rounded d-flex align-items-center pl-2 pr-2" style="height:90px">
        <div>Logo Kiri</div>
        <div class="ml-auto mr-auto">Logo Tengah</div>
        <div>Logo Kanan</div>
    </div>
    <nav class="nav border border-secondary rounded" style="height:42px">
        <a class="nav-link">Nav 1</a>
        <a class="nav-link">Nav 2</a>
        <a class="nav-link mr-auto">Nav 3</a>
        <a class="nav-link">Nav Btn</a>
    </nav>
    <main class="border border-danger rounded d-flex p-2" style="height:calc(100vh - 42px - 90px)">
        <p class="m-auto">Landing Page main content</p>
    </main>
    <footer class="border border-warning rounded d-flex flex-column p-2" style="height:100vh">
        <p class="mt-auto mb-auto align-self-center">Fullscreen footer</p>
       <nav class="nav border border-secondary rounded w-100" style="height:42px">
            <a class="nav-link">Nav 1</a>
            <a class="nav-link">Nav 2</a>
            <a class="nav-link ">Nav 3</a>
            <a class="nav-link ml-auto mr-auto">Footer message or navigation</a>
            <a class="nav-link">Nav 4</a>
            <a class="nav-link">Nav 5</a>
            <a class="nav-link">Nav 6</a>
        </nav>
    </footer>
    <!--<div x-data="dropdown()">-->
    <!--    <button x-on:click="open()">Open</button>-->
    <!--    <div x-show="isOpen()" x-on:click.away="close()">-->
    <!--        <text>S</text>-->
    <!--    </div>-->
    <!--</div>-->
    
    <script>
        function dropdown() {
            return {
                show: false,
                open() { this.show = true },
                close() { this.show = false },
                isOpen() { return this.show === true },
            }
        }
    </script>
</body>
</html>