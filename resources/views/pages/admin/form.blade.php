<div class="col-6 d-flex flex-column align-items-center bg-light">
    <form class="text-center" method="POST" action="@if($action == 'admin.store') {{route($action)}} @else {{route($action, $product->id)}} @endif" enctype="multipart/form-data">
        @csrf
        @if($action == 'admin.update')
            @method('PUT')
        @endif
        <div class="mb-3 mt-4">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->productName ?? old('productName') }}"/>
            @error('name')
            <p class="text-danger" id="nameError">{{$message}}</p>
            @enderror
        </div>
        @if(request()->routeIs('admin.create'))
        <div class="mb-3">
            <label for="mainPicture" class="form-label">Main Picture</label>
            <input type="file" class="form-control" id="mainPicture" name="mainPicture" />
            @error('mainPicture')
            <p class="text-danger" id="mainPictureError">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="picture1" class="form-label">Picture 1</label>
            <input type="file" class="form-control" id="picture1" name="picture1" />
            @error('picture1')
            <p class="text-danger" id="picture1Error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="picture2" class="form-label">Picture2</label>
            <input type="file" class="form-control" id="picture2" name="picture2" />
            @error('picture2')
            <p class="text-danger" id="picture2Error">{{$message}}</p>
            @enderror
        </div>
        @endif

        <!--BRANDS-->
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <div class="mb-3">
                <select id="brand" name="brand">
                    <option value="0">Choose brand...</option>
                    @if(isset($product))
                        <option value="{{ $product->idBrand }}" selected>{{$product->brand}}</option>
                        @foreach($brands as $brand)
                            @if($product->idBrand != $brand->id)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            @error('brand')
            <p class="text-danger" id="brandError">{{$message}}</p>
            @enderror
        </div>

        <!--CATEGORIES-->
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <div class="mb-3">
                <select id="category" name="category">
                    <option value="0">Choose category...</option>
                    @if(isset($product))
                        <option value="{{ $product->idCategory }}" selected>{{$product->category}}</option>
                        @foreach($categories as $category)
                            @if($product->idCategory != $category->id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            @error('category')
            <p class="text-danger" id="categoryError">{{$message}}</p>
            @enderror
        </div>

        <!--GENDERS-->
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <div class="mb-3">
                <select id="gender" name="gender">
                    <option value="0">Choose gender...</option>
                    @if(isset($product))
                        <option value="{{ $product->idGender }}" selected>{{$product->gender}}</option>
                        @foreach($genders as $gender)
                            @if($product->idGender != $gender->id)
                                <option value="{{$gender->id}}">{{$gender->name}}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            @error('gender')
            <p class="text-danger" id="genderError">{{$message}}</p>
            @enderror
        </div>

        <!--FITS-->
        <div class="mb-3">
            <label for="fit" class="form-label">Fit</label>
            <div class="mb-3">
                <select id="fit" name="fit">
                    <option value="0">Choose fit...</option>
                    @if(isset($product))
                        <option value="{{ $product->idFit }}" selected>{{$product->fit}}</option>
                        @foreach($fits as $fit)
                            @if($product->idFit != $fit->id)
                                <option value="{{$fit->id}}">{{$fit->name}}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($fits as $fit)
                            <option value="{{$fit->id}}">{{$fit->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            @error('fit')
            <p class="text-danger" id="fitError">{{$message}}</p>
            @enderror
        </div>

        <!--PRICES-->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <div class="mb-3">
                <select id="price" name="price">
                    <option value="0">Choose price...</option>
                    @if(isset($product))
                        <option value="{{ $product->idPrice }}" selected>{{$product->price}}</option>
                        @foreach($prices as $price)
                            @if($product->idPrice != $price->id)
                                <option value="{{$price->id}}">{{$price->price}}</option>
                            @endif
                        @endforeach
                    @else
                        @foreach($prices as $price)
                            <option value="{{$price->id}}">{{$price->price}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            @error('price')
            <p class="text-danger" id="priceError">{{$message}}</p>
            @enderror
        </div>

        <!--SIZES-->
        <div class="btn-group mb-3">
            <a class="btn dropdown-toggle border border-dark bg-white" data-toggle="dropdown" href="#">
                Sizes
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                @if(isset($product))
                    @foreach($sizes as $size)
                        <li>
                            <input type="checkbox" value="{{ $size->id }}" name="sizes[]" @foreach($productSizes as $productSize) @if($size->id == $productSize->id) checked @endif @endforeach/> {{ $size->size }}
                        </li>
                    @endforeach
                @else
                    @foreach($sizes as $size)
                        <li>
                            <input type="checkbox" value="{{ $size->id }}" name="sizes[]"/> {{ $size->size }}
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        @error('sizes')
        <p class="text-danger mb-3" id="sizeError">{{$message}}</p>
        @enderror

        @if(request()->routeIs('admin.edit'))
        <!--ON SALE-->
        <div class="mb-3">
            <label for="onSale" class="form-label">On sale</label>
            <div class="mb-3">
                <select id="onSale" name="onSale">
                    <option value="0">Is it on sale?</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            @error('onSale')
            <p class="text-danger" id="onSaleError">{{$message}}</p>
            @enderror
        </div>

        <!--DISCOUNTS-->
        <div class="mb-3" id="discountDiv">
            <label for="discount" class="form-label">Discount</label>
            <div class="mb-3">
                <select id="discount" name="discount">
                    <option value="0">Choose discount...</option>
                    @foreach($discounts as $discount)
                        <option value="{{$discount->id}}">{{$discount->discount}}%</option>
                    @endforeach
                </select>
            </div>
            @error('discount')
            <p class="text-danger" id="discountError">{{$message}}</p>
            @enderror
        </div>

            <div class="mb-3" id="dateFromDiv">
                <label for="dateFrom" class="form-label">Date From (Sale)</label>
                <input type="date" class="form-control" id="dateFrom" name="dateFrom" />

                <p class="text-danger" id="dateFromError"></p>

            </div>
            <div class="mb-3" id="dateToDiv">
                <label for="dateTo" class="form-label">Date To (Sale)</label>
                <input type="date" class="form-control" id="dateTo" name="dateTo" />

                <p class="text-danger" id="dateToError"></p>

            </div>
        @endif

        <div>
            <button type="submit" class="btn btn-lg border border-dark" id="insertBtn">Submit</button>
            @if(session()->has('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{session('success')}}
                </div>
            @elseif(session()->has('danger'))
                <div class="alert alert-danger mt-3" role="alert">
                    {{session('danger')}}
                </div>
            @endif
        </div>
    </form>
    <p class="mb-5 mt-5">Go back to admin panel<a href="{{route('admin')}}"> here.</a></p>
</div>
