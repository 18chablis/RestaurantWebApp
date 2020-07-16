@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div>
            <h3 class="text-center mt-4">The Customers</h3>
            <div class="row">
                <div class="col-sm-10">
                    <a class="btn btn-primary ml-5" data-toggle="modal" data-target="#exampleModal">Add Customer</a>
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
                            <form action="/customer" method="POST">
                                @csrf
                                <form>
                                    <div class="form-group">
                                        <label for="" class="">Full name</label>
                                        <div class="row">
                                            <div class="col">
                                                <input name="firstname" class="form-control" placeholder="First name" type="text">
                                            </div>
                                            <div class="col">
                                                <input name="lastname" class="form-control" placeholder="Last name" type="text">
                                            </div>
                                        </div>
                                    </div> <!-- form-group// -->
                                    {{-- <div class="form-group">
                                        <div class="form-check-inline">
                                            <label class="form-check-label ml-2">
                                              <input type="radio" class="form-check-input" name="male">Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline mr-5">
                                            <label class="form-check-label">
                                              <input type="radio" class="form-check-input" name="female">Female
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="" class="">Email</label>
                                        <input name="email" class="form-control m-1" placeholder="Email address" type="email">
                                    </div> <!-- form-group// -->
                                    <div class="form-group">
                                        <label for="" class="">Address</label>
                                        <div class="row mt-2">
                                            <div class="col">
                                                {{-- <select class="form-control" name="country[]">
                                                    <option selected="">Country</option>
                                                    <option>Benin</option>
                                                    <option>Nigeria</option>
                                                    <option>Togo</option>
                                                </select> --}}
                                                <input name="country" class="form-control" placeholder="Country" type="text">

                                            </div>
                                            <div class="col">
                                                <input name="state" class="form-control" placeholder="State" type="text">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col">
                                                <input name="city" type="text" class="form-control" placeholder="City">
                                            </div>
                                            <div class="col">
                                                <input name="address_name" type="text" class="form-control" placeholder="Street Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group input-group">
                                        <select class="custom-select" style="max-width: 120px;">
                                            <option selected="">+971</option>
                                            <option value="1">+972</option>
                                            <option value="2">+198</option>
                                            <option value="3">+701</option>
                                        </select>
                                        <input name="phone" class="form-control" placeholder="Phone number" type="text">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"> Save </button>
                                    </div> <!-- form-group// -->
                                </form>
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
                            <th scope="col">Firstname</th>
                            <th scope="col">Address</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created at</th>
                        </thead>
                        <tbody>
                            @foreach ($customers as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><a href="/customer/{{$item->id}}">{{$item->firstname}}</a></td>
                                    <td>{{$item->address_name}}</td>
                                    <td>{{$item->lastname}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
