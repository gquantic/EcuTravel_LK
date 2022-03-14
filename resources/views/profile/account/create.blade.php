@extends('layouts.meta')

@section('page-title')
    Аккаунт
@endsection

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/base/pages/dashboard-ecommerce.css') }}">
@endsection

@section('body-class')
    pace-done vertical-layout vertical-menu-modern navbar-floating footer-static menu-expanded
@endsection
@section('content')

    <section class="content-wrapper container-xxl p-0">
        <div class="content-body">

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills mb-2">
                        <!-- account -->
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('account.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="fw-bold">Вернутся</span>
                            </a>
                        </li>
                    </ul>
                    <!-- profile -->
                    <div class="card">
                        {{--                        <div class="card-header border-bottom">--}}
                        {{--                            <h4 class="card-title">Детали профиля</h4>--}}
                        {{--                            <div class="col-4">--}}
                        {{--                                <button type="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Изменить/добавить информацию</button>--}}
                        {{--                                <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">Вернуть изменения</button>--}}
                        {{--                            </div>--}}
                        {{--                         </div>--}}
                        <form action="{{ route('account.store') }}" class="validate-form mt-2 pt-50" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @method('POST')
                            <div class="card-body mb-75">
                                <div class="d-flex validate-form">
{{--                                    <a href="#" class="mb-75">--}}
{{--                                        <img src="{{asset('images/slider/05.jpg')}}" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />--}}
{{--                                    </a>--}}
                                    <div class="d-flex align-items-end mb-75 ms-1 validate-form">
                                        <div>
{{--                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Изменить</label>--}}
                                            <input class="form-control me-75" type="file" name="logo" id="account-upload" accept="image/*" />
{{--                                            <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>--}}
                                            <h6 class="mb-0 mt-2">Логотип компании,только: png, jpg, jpeg.</h6>
                                            <p class="mt-1">Отображается на сайте и на бланке билета</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ header section -->
                                <!-- form -->
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountFirstName">Наименование организации</label>
                                        <input type="text" class="form-control" id="accountFirstName" name="firstName" value="" data-msg="" >
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountPhoneNumber">БИК банка</label>
                                        <input type="tel" class="form-control account-number-mask" id="accountPhoneNumber" name="phoneNumber"  value="">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountEmail">Регистрационный номер перевозчика</label>
                                        <input type="text" class="form-control" id="accountEmail" name="brand" placeholder="Бренд">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountOrganization">Кор/ счет</label>
                                        <input type="text" class="form-control" id="accountOrganization" name="organization"  value="" aria-invalid="false" maxlength="20">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountPhoneNumber">Юридический адрес</label>
                                        <input type="text" class="form-control account-number-mask" id="accountPhoneNumber" name="phoneNumber" value="">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountAddress">Расчётный счет</label>
                                        <input type="text" class="form-control" id="accountAddress" name="address">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountState">Почтовый адрес</label>
                                        <input type="text" class="form-control" id="accountState" name="state" placeholder="Индекс, Город, Улица, номер дома, номер офиса" >
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">ФИО контактного лица</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipCode"  placeholder="ФИО полностью" maxlength="50">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">ИНН</label>
                                        <input type="text" class="form-control" name="" min="3" maxlength="12">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">E-mail контактного лица</label>
                                        <input type="email" class="form-control" >
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">ОГРН</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" maxlength="15">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Телефон организации</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipCode" placeholder="ФИО полностью" maxlength="15">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">КПП</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipCode"  maxlength="9">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Телефон контактного лица</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipCode"  maxlength="15">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Наименование банка</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipCode"  maxlength="50">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Фирменное наименование</label>
                                        <input type="text" class="form-control account-zip-code" id="accountZipCode" name="zipCode"  maxlength="50">
                                    </div>


                                </div>
                                <button type="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Создать</button>
                            </div>

                        </form>
                        <!--/ form -->
                    </div>
                </div>
                <!--/ profile -->
            </div>
        </div>
    </section>

@endsection
