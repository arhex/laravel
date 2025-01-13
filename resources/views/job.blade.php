<x-layout>

    <x-slot:heading>
        Job
    </x-slot:heading>
    <x-slot:headingtext>
        Зарплати
    </x-slot:headingtext>
    @if(isset($job['title']) )
        <h1>Зарплатка {{ $job['title'] }}</h1>
        <p> Tuhis job pays {{ $job['salary'] }} per year.</p>
        <p> Company - {{$job['employer']['name']}}</p>

    @else
        <h1>Сторінка не знайдена </h1>

    @endif

    @section('aside')
        @parent

    @endsection
</x-layout>
