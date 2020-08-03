@extends('admin.mater-admin')
@section('header')
<title>Admin | Trang chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Responsive bootstrap 4 admin template" name="description">
<meta content="Coderthemes" name="author">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style>
    .text-truncate {
        margin-left: -100px;
    }

    .scrollbar {
        margin-left: 22px;
        float: left;
        height: 300px;
        background: #ffffff;
        overflow-y: scroll;
        margin-bottom: 25px;
    }

    .force-overflow {
        min-height: 450px;
    }

    #my-style::-webkit-scrollbar {
        width: 5px;
        background-color: #edf0f0;
    }

    #my-style::-webkit-scrollbar-thumb {
        background-color: #0ae;
        background-image: -webkit-gradient(linear, 0 0, 0 100%,
                color-stop(.5, rgba(255, 255, 255, .2)),
                color-stop(.5, transparent), to(transparent));
    }

    #my-style::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 50px;
        background-color: blue;
    }

    #my-style::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }

    .ctext-wrap {
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        background: #c7edee;
        border-radius: 3px;
        display: inline-block;
        padding: 12px;
        position: relative;
    }
</style>
@endsection
@section('main-conten')
<br>
<!-- dd($sluser,$sloder, $slProduct,$slTypeProduct,$slComment, $slMember,$slNews); -->
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card bg-pink">
            <div class="card-body widget-style-2">
                <div class="text-white media">
                    <div class="media-body align-self-center">
                        <h2 class="my-0 text-white"><span data-plugin="counterup">{{$sluser}}</span></h2>
                        <p class="mb-0">Người dùng</p>
                    </div>
                    <i class="ion-md-person"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card bg-info">
            <div class="card-body widget-style-2">
                <div class="text-white media">
                    <div class="media-body align-self-center">
                        <h2 class="my-0 text-white"><span data-plugin="counterup">{{$sloder}}</span></h2>
                        <p class="mb-0">Đơn Hàng</p>
                    </div>
                    <i class="ion-ios-pricetag"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card bg-purple">
            <div class="card-body widget-style-2">
                <div class="text-white media">
                    <div class="media-body align-self-center">
                        <h2 class="my-0 text-white"><span data-plugin="counterup">{{$slNews}}</span></h2>
                        <p class="mb-0">Bài viết</p>
                    </div>
                    <i class="ion-md-paper-plane"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card bg-primary">
            <div class="card-body widget-style-2">
                <div class="text-white media">
                    <div class="media-body align-self-center">
                        <h2 class="my-0 text-white"><span data-plugin="counterup">{{$slComment}}</span></h2>
                        <p class="mb-0">Bình luận</p>
                    </div>
                    <i class="mdi mdi-comment-multiple"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card-box" style="background: white">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-info rounded-circle">
                        <i class="ion-logo-usd avatar-title font-26 text-white">+</i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="my-0 font-weight-bold"><span data-plugin="counterup">
                                @foreach( $oddetail as $dxs)
                                {{$dxs->tong}}
                                @endforeach</span></h3>
                        <p class="mb-0 mt-1 text-truncate">Danh thu hiện tại tháng này</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-box-->
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card-box" style="background: white">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-warning rounded-circle">
                        <i class="ion-md-cart avatar-title font-26 text-white">+</i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="my-0 font-weight-bold"><span data-plugin="counterup">{{$odernew}}</span></h3>
                        <p class="mb-0 mt-1 text-truncate">Đơn hàng mới</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-box-->
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card-box" style="background: white">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-success rounded-circle">
                        <i class="ion-md-contacts avatar-title font-26 text-white">+</i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="my-0 font-weight-bold"><span data-plugin="counterup">{{$usernew}}</span></h3>
                        <p class="mb-0 mt-1 text-truncate">Người dùng mới</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-box-->
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card-box" style="background: white">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-primary rounded-circle">
                        <i class=" far fa-star avatar-title font-26 text-white"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="my-0 font-weight-bold"><span data-plugin="counterup">{{$slmember}}</span></h3>
                        <p class="mb-0 mt-1 text-truncate">Thành viên</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-box-->
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header py-3 bg-transparent">
                <div class="card-widgets">
                    <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                </div>
                <h5 class="header-title mb-0">Đơn hàng chưa xác nhận</h5>
            </div>
            <div id="cardCollpase3" class="collapse show">
                <div class="card-body">
                    <div class="scrollbar" id="my-style">
                        <div class="force-overflow">
                            @foreach($odercxd as $dx)
                            <li class="list-group-item border-0 pt-2">
                                <a href="#">
                                    <img style="width: 80px" src="{{asset('img/background/doi-tra-hang.png')}}" />
                                    <a class="header-title mb-4"> Mã đơn hàng : {{$dx->id}}</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-->
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header py-3 bg-transparent">
                <div class="card-widgets">
                    <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                </div>
                <h5 class="header-title mb-0">Bình luận gần đây</h5>
            </div>
            <div id="cardCollpase3" class="collapse show">
                <div class="card-body">
                    <div class="scrollbar" id="my-style">
                        <div class="force-overflow">
                            <div class="chat-conversation">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 314px;">
                                    <ul class="conversation-list slimscroll" style="min-height: 330px; overflow: hidden; width: auto; height: 314px;">
                                        @foreach($commet as $cm)
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="{{asset('img/background/1200.png')}}" alt="male">
                                                <i>{{$cm->created_at->format('d/m/y - H:i')}}</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    @foreach($user as $u)
                                                    @if($cm->user_id == $u->id)
                                                    <h5>{{$u->email}}</h5>
                                                    @endif
                                                    @endforeach
                                                    @foreach($product as $up)
                                                    @if($cm->product_id == $up->id)
                                                    <i>Sản phẩm: {{$up->product_name}}</i>
                                                    @endif
                                                    @endforeach
                                                    <i>Nội dung:</i>
                                                    <h6>
                                                        {{$cm->content}}
                                                    </h6>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Chat -->
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header py-3 bg-transparent">
                <div class="card-widgets">
                    <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                </div>
                <h5 class="header-title mb-0">Người dùng gần đây</h5>
            </div>
            <div id="cardCollpase3" class="collapse show">
                <div class="card-body">
                    <div class="scrollbar" id="my-style">
                        <div class="force-overflow">
                            @foreach($user_nearest as $usn)
                            <li class="list-group-item border-0 pt-2">
                                <img style="width:45px;margin-top: -1px" src="{{asset('img/background/user.png')}}" alt="male">
                                <a class="ctext-wrap" style="border-top-right-radius: 22px;border-bottom-right-radius: 22px">
                                    {{$usn->email}} <br>
                                    <!-- {{$usn->created_at->format('d/m/y - H:i')}} -->
                                </a>
                            </li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card-->
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="header-title mb-4">Sản phẩm gần đây</h4>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                <thead class="table-info">
                        <tr>
                            <th>Tên SP</th>
                            <th>Loại</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Giá khuyến mãi</th>
                            <th>Hình</th>
                            <th>Đơn vị</th>
                            <th>Nguyên liệu thô</th>
                            <th>Nguồn</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $product_nearest as $pr )
                        <tr>
                            <td>{{ $pr->product_name }}</td>
                            @foreach( $listtypeproduct as $tpr )
                            @if( $pr->type_product_id == $tpr->id)
                            <td>{{ $tpr->type_name}}</td>
                            @endif
                            @endforeach
                            <td>{{ $pr->description }}</td>
                            <td><span class="badge badge-purple">{{ $pr->unit_price }} VNĐ</span></td>
                            <td><span class="badge badge-primary">{{ $pr->promotion_price }} VNĐ</span></td>
                            <td>
                                <div class="thumbnail">
                                    <img src="{{asset('img/product/'.$pr->image)}}" alt="" />
                                </div>
                            </td>
                            <td>{{ $pr->unit }}</td>
                            <td>{{ $pr->raw_material }}</td>
                            <td>{{ $pr->origin }}</td>
                            <td>
                                <a href="{{route('list-admin.ds-product.update', ['id'=>$pr->id])}}" class="text-primary font-20"><i class="fa fa-wrench"></i> </a>
                                <hr>
                                <a href="{{route('list-admin.ds-product.delete', ['id'=>$pr->id])}}" class="text-danger font-20" onclick="return confirm('Bạn chất chắn xóa ?');"><i class="far fa-trash-alt"></i></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
<div id="stats-container" style="height: 250px;"></div>
</div>
<!-- end card-->
@endsection
@section('script')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
<script>
    $(function() {
        function requestData(days, chart) {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/admin/dashboard.dashboard", // This is the URL to the API
                data: {
                    days: days
                },
                success: function(response) {
                    alert(data)
                }
            })
            console.log(data)

                .done(function(data) {
                    // When the response to the AJAX request comes back render the chart with new data
                    chart.setData(data);
                })
                .fail(function() {
                    // If there is no communication between the server, show an error
                    alert("error occured");
                });
        }
        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'stats-container',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Orders'] // Set the label when bar is rolled over
        });
        requestData(7, chart);
    });
</script>
<script src="{{asset('admin/assets/js/pages/dashboard3.init.js') }}"></script>
@endsection