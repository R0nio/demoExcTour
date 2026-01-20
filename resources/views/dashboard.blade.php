<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-200 grid grid-cols-3 gap-3">
                    @if ($orders->isEmpty())
                    <div class="border-gray-300 border-2 text-black w-auto p-6 flex flex-col justify-center items-center">
                        <p>Туров нету</p>
                    </div>
                    @else
                    @foreach ($orders as $order)
                    <div class="border-gray-300 border-2 text-black w-auto flex flex-col justify-center items-center">
                        <img src="{{Vite::asset($order->tour->image)}}" width="200" alt="">
                        <p>Дата тура: <time>{{$order->tour->date}}</time></p>
                        <p>Название тура: {{$order->tour->title}}</p>
                        <p>Количество мест: {{$order->count}}</p>
                        <p>Общая стоимость: {{$order->tour->cost * $order->count}}р</p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>