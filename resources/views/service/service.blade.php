@extends("layout.master")
@section("title","Service")
@section("content")
    <div class="container border border-warning mt-5">
        <h1 class=" font-weight-normal text-warning text-center">Our Services</h1>
    </div>
    <div class="container mt-5">
        <div class="card flex-md-row mb-4 box-shadow h-md-250 p-5">
            <div class="card-body d-flex flex-column align-items-start">
                <p class="card-text mb-auto about_us">လူကြီးမင်းတို့ ၀ယ်ယူရန်အခက်အခဲဖြစ်နေသော <span>international course </span>များရှိပါက ကျွန်တော်တို့ရဲ့ အောက်ပါ <span> Email</span> သို့ <span>Ph_number </span>ကိုလာရောက်ဆက်သွယ်ပီး စိတ်ချယုံကြည်ပီး စျေးနှုန်းချိုသာစွာဖြင့် ၀ယ်ယူပေးပါသည်</p>
                <ul class="m-3">
                    <li>kaunghtetoo884@gmail.com</li>
                    <li>09-773458236</li>
                </ul>
                <a href="tel:09-773458236" type="button" class="btn btn-primary">More Detail</a>
            </div>
            <img class="card-img flex-auto col-md-5" id="service-img" src="{{asset('img/ecommerce-2140603_1920.jpg')}}" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_176a43da379%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_176a43da379%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22130.7%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
    </div>
@endsection
