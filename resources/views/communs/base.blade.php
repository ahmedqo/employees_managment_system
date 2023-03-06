<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>@yield('title') | HA Groupe</title>
    <style>
        ::-webkit-scrollbar-track {
            border-radius: .2rem;
            background-color: transparent;
        }

        ::-webkit-scrollbar {
            width: .5rem;
            height: .5rem;
            background-color: transparent;
            border: 1px solid rgb(209 213 219);
        }

        ::-webkit-scrollbar-thumb {
            border-radius: .2rem;
            background-color: rgb(147 197 253 / 1);
        }

        .revert * {
            all: revert;
            max-width: 100% !important;
        }

        .revert img {
            border-radius: 0.375rem;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        [contenteditable]:empty::before {
            color: grey;
        }

        [contenteditable][placeholder]:not([placeholder=""]):empty::before {
            content: attr(placeholder);
        }

        @media (min-width: 1024px) {
            .lg\:min-w-100 {
                min-width: calc(100% - 260px);
            }
        }
    </style>
</head>

<body class="flex flex-col flex-wrap lg:flex-row bg-gray-100">
    @include('communs.sidebar')
    <main class="flex-1 flex flex-col max-w-full lg:min-w-100">
        @include('communs.header')
        <section class="w-full container mx-auto p-4 flex flex-col gap-4">
            @yield('content')
        </section>
    </main>
    <section id="print" class="w-full p-4 hidden">
        @yield('print')
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
    @if (Session::has('message'))
        <script>
            const info = {!! json_encode(Session::all()) !!};
            const message = (Array.isArray(info.message) ? info.message : [info.message]).join("<br />");
            const type = info.type;
            (new Toaster({
                positionX: "right",
                positionY: "bottom",
                width: 500
            }))[type](message);
        </script>
    @endif
    <script>
        Program
            .ucfirst()
            .toggle()
            .password()
            .rich()
            .select()
            .date()
            .table();

        const DATA = new DataTransfer();
        const PAGE = document.querySelector('#print');
        var html = PAGE.innerHTML;
        PAGE.remove();

        function Print() {
            var doc = window.open('', 'PRINT');
            doc.document.write(
                `<html><head><link rel="stylesheet" href="{{ asset('css/app.css') }}" /><style>@media print {@page { size: auto;margin: 5mm 5mm 5mm 5mm;  } }table tbody tr:nth-child(even) {background: #f6f6f6;}.revert * {all: revert;max-width: 100% !important;}.revert img {border-radius: 0.375rem;}</style> </head><body><header class="flex justify-between items-center gap-4 mb-20"><div class="w-64"><img src="{{ asset('logo-blue.png') }}" class="w-full block" />   </div><div class="w-96 flex flex-col"><p><strong>Email:</strong> ahmedqo1995@gmail.com</p><p><strong>Phone:</strong> 0679719118</p><p><strong>Address:</strong> 516 Chapman St, Hillside, NJ 07205, Morocco</p></div></header><main class="flex-1 mb-16">${html}</main></body></html>`
            );
            doc.document.close();
            doc.focus();
            setTimeout(() => {
                doc.print();
                //doc.close();
            }, 1000);
        }

        (() => {
            const buttons = [...document.querySelectorAll("aside ul button")];
            buttons.forEach(button => {
                const id = button.nextElementSibling.id;
                if (localStorage.getItem('x-menu-item') == id) button.click();
                button.addEventListener("click", e => {
                    buttons.forEach(btn => {
                        if (btn !== button) {
                            classes.remove(btn.nextElementSibling, 'flex');
                            classes.add(btn.nextElementSibling, 'hidden');
                            classes.remove(btn.querySelectorAll(':scope > svg')[1], 'hidden');
                            classes.add(btn.querySelectorAll(':scope > svg')[1], 'flex');
                            classes.remove(btn.querySelectorAll(':scope > svg')[0], 'flex');
                            classes.add(btn.querySelectorAll(':scope > svg')[0], 'hidden');
                        }
                    });
                    localStorage.setItem('x-menu-item', id);
                });
            })
        })()
    </script>
    @yield('script')
</body>

</html>
