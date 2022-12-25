@extends('layouts.app')
@section('title', 'Students')

@section('content')
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">

        <div class="border-t border-gray-200">

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Student name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            NRP
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Date Of Birth
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Thesis Defense Date
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                                        @foreach($students as $student)
                                            <tr class="bg-white border-b">
                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                                    {{$student->name}}
                                                </th>
                                                <td class="py-4 px-6">
                                                    {{$student->nrp}}
                                                </td>
                                                <td class="py-4 px-6">
                                                    {{$student->dob}}
                                                </td>
                                                <td class="py-4 px-6">
                                                    {{$student->thesisDefenseDate}}
                                                </td>
                                            </tr>
                                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
