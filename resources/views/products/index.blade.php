@extends('layouts.app')

@section('content')
    @isset($products)
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            </tbody>
                @foreach ($products as $products)
                    <tr>
                        <td>{{ $products->id }}</td>
                        <td>{{ $products->ProductName }}</td>
                        <td>{{ $products->Status }}</td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    @endisset
@endsection