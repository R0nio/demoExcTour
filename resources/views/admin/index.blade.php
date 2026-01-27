<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Админ панель') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-200 gap-3">
                    @if ($orders->isEmpty())
                    <div class="border-gray-300 border-2 text-black w-auto p-6 flex flex-col justify-center items-center ">
                        <p>Заявок нету</p>
                    </div>
                    @else
                    <div class="flex flex-col text-black">
                        <div class="grid grid-cols-6">
                            <p>ФИО</p>
                            <p>Кол-во мест</p>
                            <p>Дата тура</p>
                            <p>Название тура</p>
                            <p>Цена тура</p>
                            <p>Общая стоимость</p>
                        </div>
                        @foreach ($orders as $order)
                        <div class="grid grid-cols-6 border-b border-red-600">
                            <p>{{$order->user->lastname}} {{$order->user->name}} {{$order->user->middlename}}</p>
                            <p>{{$order->count}}</p>
                            <p>{{$order->tour->date}}</p>
                            <p>{{$order->tour->title}}</p>
                            <p>{{$order->tour->cost}} &#8381;</p>
                            <p>{{$order->tour->cost * $order->count}} &#8381;</p>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>