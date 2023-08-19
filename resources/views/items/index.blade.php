@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Items Index</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Seller</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($items as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->seller }}</td>
                                <td>{{ $item->price }} LE</td>
                                <td>{{ $item->created_at ? $item->created_at->diffForHumans() : '-' }}</td>
                                <td>{{ $item->updated_at ? $item->updated_at->diffForHumans() : '-' }}</td>
                            </tr>
                        @empty
                                <tr>No data no show</tr>
                        @endforelse

                        </tbody>
                    </table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
