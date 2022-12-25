@extends('layouts.app')
@section('title', 'Thesis Revision')
@section('content')
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">

        <div class="border-t border-gray-200">

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            NRP
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Abstract
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Keywords
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($theses as $thesis)
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            {{$thesis->title}}
                        </th>
                        <td class="py-4 px-6">
                            {{$thesis->nrp}}
                        </td>
                        <td class="py-4 px-6">
                            {{$thesis->abstract}}
                        </td>
                        <td class="py-4 px-6">
                            {{$thesis->keywords}}
                        </td>
                        <td class="py-4 px-6">
                            <form method="post" action="{{route('submitForm')}}">
                                @csrf
                                <input name="id" type="hidden" value="{{$thesis->id}}"/>
                                <input required name="content" type="text" placeholder="Masukkan revisi"/>
                                <button type="submit" class="border-2 p-2 border-gray-300 hover:bg-purple-500 hover:text-white">Submit</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
