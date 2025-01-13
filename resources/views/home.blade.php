<x-layout>

    <x-slot:heading>
        Главная страницa
    </x-slot:heading>
    <x-slot:headingtext>
        Тут главная
    </x-slot:headingtext>

    <h1> Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
    </p>

    @section('aside')
        @parent
        <p>Просто еще одін текст</p>

    @endsection
</x-layout>
