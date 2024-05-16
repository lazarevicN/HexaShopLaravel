<div class="item">
    <div class="thumb">
        <div class="hover-content">
            @if(request()->routeIs('home') || request()->routeIs('men') || request()->routeIs('women') || request()->routeIs('kids'))
            <ul>
                <li><a href="{{route('product', ['id' => $product->id])}}"><i class="fa fa-eye"></i></a></li>
            </ul>
            @endif
        </div>
        <img src="{{asset('assets/images/' . $product->picture)}}" alt="{{$product->prodName}}">
    </div>
    <div class="down-content">
        <h4>{{$product->brand}} "{{$product->prodName}}"</h4>
            @if($product->dateFrom <= $date && $product->dateTo>$date)
                <span><del>$ {{$product->price}}</del></span>
                <span class="text-danger">$ {{$product->newPrice}}</span>
            @else
                <span>${{$product->price}}</span>
            @endif
    </div>
    @if(request()->routeIs('admin'))
        <div class="col-12 text-right mb-2">
            <button type="button" data-id="{{$product->id}}"  class="btn btn-lg deleteBtn border border-danger text-danger" name="deleteBtn" >Delete</button>
        </div>
        <div class="col-12 text-right">
            <a href="{{route('admin.edit', ["id" => $product->id])}}">
                <button type="button"  class="btn btn-lg border updateBtn border-dark" name="updateBtn" >Update</button>
            </a>
        </div>
    @endif
</div>


