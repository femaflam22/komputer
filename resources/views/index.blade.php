@extends('layout')

@section('content')
<div class="container content">
    <div class="table-wrap">
        @if (Session::get('add'))
            <div class="alert alert-success">
                {{Session::get('add')}}
            </div>
        @endif
        @if (Session::get('update'))
            <div class="alert alert-success">
                {{Session::get('update')}}
            </div>
        @endif
        @if (Session::get('delete'))
            <div class="alert alert-warning">
                {{Session::get('delete')}}
            </div>
        @endif
        <div class="d-flex justify-content-end mb-3">
            <a href="{{route('create')}}" class="btn btn-primary">Create</a>
            <a href="{{route('logout')}}" class="btn btn-warning ml-4">Logout</a>
        </div>
        <table class="table table-borderless table-responsive">
            <thead class="px-3">
                <tr>
                    <th class="pl-4">#</th>
                    <th class="text-muted fw-600">Merk</th>
                    <th class="text-muted fw-600">Type</th>
                    <th class="text-muted fw-600">Lab</th>
                    <th class="fw-600 pr-4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $comp)
                <tr class="align-middle alert" role="alert">
                    <td class="pl-4">
                        <div class="fw-600 text-left">...</div>
                    </td>
                    <td>
                        <div class="fw-600">{{$comp['merk']}}</div>
                    </td>
                    <td>
                        <div class="fw-600">{{$comp['type']}}</div>
                    </td>
                    <td>
                        <div class="d-inline-flex align-items-center waiting">
                            <div class="circle"></div>
                            <div class="pl-2">{{ $comp['lab'] }}</div>
                        </div>
                    </td>
                    <td class="d-flex pr-5">
                        <a href="{{route('edit', $comp['id'])}}" class="fw-600"><i class="fas fa-pen"></i></a>
                        <form action="{{route('delete', $comp['id'])}}" method="POST" class="btn p-0 ml-2" data-bs-dismiss="alert">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fas fa-times btn btn-outline-none" style="padding: 0 !important"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection