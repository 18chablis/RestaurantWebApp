@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div>
            <h3 class="text-center mt-4">The Dishes</h3>
            <div class="row">
                <div class="col-sm-10">
                    <a class="btn btn-primary ml-5" href="dish/create"  data-toggle="modal" data-target="#exampleModal">Add Dish</a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/dish" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                {{-- END OF MODAL --}}
            </div>
            <div class="row m-3">
                <div class="col-sm-12 ml-0">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                        </thead>
                        <tbody>
                            @foreach ($dishes as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><a href="/shepherds/{{$item->id}}">{{$item->name}}</a></td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->image}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
