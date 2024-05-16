@extends('layouts.layout')

@section('description') Admin panel @endsection
@section('keywords') admin, panel, products, categories, brands @endsection
@section('title') Admin @endsection

@section('content')

    <div class="container moveDiv mb-3">
        <div class="row">
            <div class="col-12 text-center">
                <img class="img-fluid" src="{{asset('assets/images/autorAdmin.jpg')}}" alt="Admin" />
                <p class="mt-2">Admin Panel</p>
                <p>Admin: <span class="font-italic">Nikola Lazarevic</span></p>
                <ul class="d-flex justify-content-around mt-5 mb-4">
                    <li>
                        <a href="#categories" class="text-warning">Categories</a>
                    </li>
                    <li>
                        <a href="#brands" class="text-warning">Brands</a>
                    </li>
                    <li>
                        <a href="#fits" class="text-warning">Fits</a>
                    </li>
                    <li>
                        <a href="#activities" class="text-warning">Activities</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5 mb-2">Products</h1>
                <a href="{{route('admin.create')}}">
                    <p class="text-warning mb-4 font-italic">Click here if you want to create new product</p>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="products">
            @foreach($products as $product)
                <div class="col-lg-4">
                    @include('partials.product')
                </div>
            @endforeach
        </div>
        <hr/>
    </div>

    <!-- CATEGORIES CRUD -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5 mb-4">Categories</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Insert</h1>
                @include('partials.insertUpdateFieldsOneTable', ['id' => 'insertCategory', 'tableName' => 'category', 'idBtn' => 'insertCategoryBtn', 'actionTableNameErr' => 'insertCategoryError'])
            </div>
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Delete</h1>
                <div>
                    @include('partials.deleteUpdateSelectOneTable', ['id' => 'deleteCategoryOpt', 'tableName' => 'Category', 'data' => $categories, 'operation' => 'delete'])
                </div>
                <button type="button"  id='deleteCategoryBtn' class="btn btn-lg border border-danger text-danger mt-3" name="deleteCategoryBtn" >Delete</button>
                <p class="text-danger" id="deleteCategoryError"></p>
            </div>
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Update</h1>
                <div>
                    @include('partials.deleteUpdateSelectOneTable', ['id' => 'updateCategoryOpt', 'tableName' => 'Category', 'data' => $categories, 'operation' => 'update'])
                    <p class="text-danger mt-2" id="updateCategoryError1"></p>
                </div>
                @include('partials.insertUpdateFieldsOneTable', ['id' => 'updateCategory', 'tableName' => 'name', 'idBtn' => 'updateCategoryBtn', 'actionTableNameErr' => 'updateCategoryError2'])
            </div>
        </div>
    <hr/>
    </div>

    <!-- BRANDS CRUD -->
    <div class="container" id="brands">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5 mb-4">Brands</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Insert</h1>
                <div>
                    @include('partials.insertUpdateFieldsOneTable', ['id' => 'insertBrand', 'tableName' => 'brand', 'idBtn' => 'insertBrandBtn', 'actionTableNameErr' => 'insertBrandError'])
                </div>
            </div>
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Delete</h1>
                <div>
                    @include('partials.deleteUpdateSelectOneTable', ['id' => 'deleteBrandOpt', 'tableName' => 'Brand', 'data' => $brands, 'operation' => 'delete'])
                </div>
                <button type="button" id="deleteBrandBtn" class="btn btn-lg border border-danger text-danger mt-3" name="deleteBrandBtn" >Delete</button>
                <p class="text-danger" id="deleteBrandError"></p>
            </div>
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Update</h1>
                <div>
                    @include('partials.deleteUpdateSelectOneTable', ['id' => 'updateBrandOpt', 'tableName' => 'Brand', 'data' => $brands, 'operation' => 'update'])
                    <p class="text-danger mt-2" id="updateBrandError1"></p>
                </div>
                @include('partials.insertUpdateFieldsOneTable', ['id' => 'updateBrand', 'tableName' => 'name', 'idBtn' => 'updateBrandBtn', 'actionTableNameErr' => 'updateBrandError2'])
            </div>
        </div>
        <hr/>
    </div>

    <!-- FITS CRUD -->
    <div class="container" id="fits">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5 mb-4">Fits</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Insert</h1>
                <div>
                    @include('partials.insertUpdateFieldsOneTable', ['id' => 'insertFit', 'tableName' => 'fit', 'idBtn' => 'insertFitBtn', 'actionTableNameErr' => 'insertFitError'])
                </div>
            </div>
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Delete</h1>
                <div>
                    @include('partials.deleteUpdateSelectOneTable', ['id' => 'deleteFitOpt', 'tableName' => 'Fit', 'data' => $fits, 'operation' => 'delete'])
                </div>
                <button type="button" id="deleteFitBtn" class="btn btn-lg border deleteFitBtn border-danger text-danger mt-3" name="deleteFitBtn" >Delete</button>
                <p class="text-danger" id="deleteFitError"></p>
            </div>
            <div class="col-4 text-center">
                <h1 class="mt-5 mb-4">Update</h1>
                <div>
                    @include('partials.deleteUpdateSelectOneTable', ['id' => 'updateFitOpt', 'tableName' => 'Fit', 'data' => $fits, 'operation' => 'update'])
                    <p class="text-danger mt-2" id="updateFitError1"></p>
                </div>
                @include('partials.insertUpdateFieldsOneTable', ['id' => 'updateFit', 'tableName' => 'name', 'idBtn' => 'updateFitBtn', 'actionTableNameErr' => 'updateFitError2'])
            </div>
        </div>
        <hr/>
    </div>

<!--ACTIVITIES-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7">
                <h3>List of users activities</h3>
            </div>
            <div class="col-lg-5" id="dateFilter">
                <label for="datum" class="form-label mr-3">Filter by date</label>
                <input type="date" id="date" name="date">
            </div>
        </div>
        <div class="row" id="activities">
            <table class="table table-responsive-md mt-5">
                <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody id="tableBody">
                @foreach($admins as $admin)
                    <tr>
                        <th scope="row">{{ $admin->user_id }}</th>
                        <td>{{ $admin->action }}</td>
                        <td>{{ $admin->date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
