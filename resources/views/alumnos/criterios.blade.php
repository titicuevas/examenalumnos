<x-app-layout>
    <x-slot name="header">
        Criterios
    </x-slot>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Criterios</h1>
        <div> Nombre del alumno: {{ $alumno->nombre }}</div>
        <div class="border border-gray-200 shadow">

            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Id
                        </th>

                        <th class="px-6 py-2 text-xs text-gray-500">
                            Nombre
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Asignatura
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Nota
                        </th>
                    </tr>

                </thead>
                <tbody class="bg-white">
                    @foreach ($alumno->notas as $nota)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-blue-500 hover:underline">
                                <a href="{{ route('alumnos.show', $alumno) }}">
                                    {{ $alumno->id }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $nota->ccee->ce }}
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $nota->ccee->descripcion }}
                                </div>
                            </td>


                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">

                                    {{ $nota->nota }}
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>

                        <td class="">Media:</td>
                        <td class="px-6 py-4">
                            <div
                                @if ($media > 5) class = "text-green-500 text-sm";
                                    @else
                                    class = "text-red-500 text-sm" @endif=>


                                {{ $media }}
                            </div>
                        </td>

                    </tr>

                </tbody>
            </table>

        </div>
        <a href="/alumnos" class="mt-4 text-blue-900 hover:underline">Volver a los alumnos</a>
    </div>

</x-app-layout>
{{ $alumno }}

<br>
{{ $alumno->notas->first()->nota }}
<br>

{{ $alumno->nombre }}
<br>
@foreach ($alumno->notas as $nota)
    {{ $nota->ccee->ce }}-
    {{ $nota->ccee->descripcion }}-
    {{ $nota->nota }} <br>
@endforeach
