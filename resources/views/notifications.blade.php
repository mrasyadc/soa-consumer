@extends('layouts.app')
@section('title', 'Notifications')

@section('content')
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">

        <div class="border-t border-gray-200">

            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Notifications
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Status
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Created At
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Updated At
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notifications as $notification)
                        <tr class="bg-white border-b">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                {{$notification->notification}}
                            </th>
                            <td class="py-4 px-6">
                                {{$notification->status}}
                            </td>
                            <td class="py-4 px-6">
                                {{$notification->created_at}}
                            </td>
                            <td class="py-4 px-6">
                                {{$notification->updated_at}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
