<x-layout>

    <x-slot:heading>
        Salary
    </x-slot:heading>
    <x-slot:headingtext>
        Зарплати
    </x-slot:headingtext>

    <h1>Зарплатка</h1>

    @foreach($jobs as $job )
        <li>
            <a href="/jobs/{{ $job['id'] }}"> <strong>{{ $job['title'] }} </strong>: Pays {{$job['salary']}} per year. </a>
        </li>
    @endforeach
    @section('aside')
        @parent

    @endsection
</x-layout>
