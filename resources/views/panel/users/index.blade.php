@extends('panel.layouts.master')
@section( 'title','مدیریت کاربران')
@section('content')

<div class="content-wrapper">


    <div class="content-header">
        <div class="container-fluid px-4">
            <div class="row mb-2 d-flex flex-wrap justify-content-between">

                <h1 class="m-0 text-dark">مدیریت کاربران </h1>

                <div>
{{--                    @can('create_user')--}}
{{--                    <a href="{{route('admin.user.create')}}" class="btn btn-sm btn-outline-primary p-2">افزودن کاربر جدید</a>--}}
{{--                    @endcan--}}

                    <a href="{{route('admin.home')}}" class="btn btn-sm btn-outline-secondary p-2">بازگشت</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
           <div class="card shadow-sm">


                <form action="" method="get">

                    <div class="row py-2">
                        <div class="col-lg-3 mr-2">
                            <input type="text" name="search" placeholder="جستجو براساس نام ،شماره تماس" class="form-control ml-2">
                        </div>

                        <div class="col-lg-4">
                            <button type="submit" class="btn  btn-outline-success ">جستجو</button>
{{--                            @can('show_admin')--}}
{{--                            <a href="{{route('admin.user.index')}}?admin=1" class="btn btn-outline-secondary mr-2">--}}
{{--                                نمایش کاربران مدیر--}}
{{--                            </a>--}}
{{--                            @endcan--}}
                        </div>

                    </div>
                </form>
               <div class="py-4 px-4 ">

                    <table class="table table-sm">
                        <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>نام و نام خانوادگی</th>
                            <th>شماره تماس</th>
                            <th>تاریخ اخرین تماس</th>
                            <th>شماره اخر تماس گیرنده</th>
                            <th>نام تماس گیرنده</th>
                            <th>مدت تماس</th>
                            <th>مجموع مدت تماس</th>
                            <th>اقدامات</th>
                        </tr>
                        </thead>
                        <tbody>
                             @foreach($users as $user)
                                <tr>
                                    <td  class="text-align-center">{{$loop->index}}</td>
                                    <td  class="text-align-center">{{$user->name}}</td>
                                    <td  class="text-align-center">{{$user->phone}}</td>
                                    <td  class="text-align-center">{{jdate($user->operator()->orderby('created_at' , 'desc')->first()->created_at)->format('Y-%m-%d H:i:s')}}</td>
                                    <td  class="text-align-center">{{$user->operator()->orderby('created_at' , 'desc')->first()->customers->phone}}</td>

                                    <td  class="text-align-center">{{$user->operator()->orderby('created_at' , 'desc')->first()->customers->name}}</td>
                                    <td  class="text-align-center">{{$user->operator()->orderby('created_at' , 'desc')->first()->time}}</td>
                                    <td  class="text-align-center">{{$user->operator()->sum('time')}}</td>
                                    <td  class="text-align-center">

                                    </td>
                                </tr>
                             @endforeach

                        </tbody>

                    </table>

               </div>
               <div class="card-footer">
                   {{$users->render()}}

               </div>

           </div>

        </div>
    </div>

</div>

@endsection
