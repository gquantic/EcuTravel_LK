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
                            <a class="nav-link" href="{{route('account.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-3 me-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="fw-bold">Аккаунт</span>
                            </a>
                        </li>
                        <!-- security -->
{{--                        @switch($account)--}}
{{--                            @case('logo')--}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('account.create')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock font-medium-3 me-50"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <span class="fw-bold">Заполнение данных</span>
                                </a>
                            </li>
{{--                            @break--}}
{{--                        @endswitch--}}
                        <!-- billing and plans -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark font-medium-3 me-50"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                <span class="fw-bold">Кнопка 2</span>
                            </a>
                        </li>
                        <!-- notification -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell font-medium-3 me-50"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                <span class="fw-bold">Кнопка 3</span>
                            </a>
                        </li>
                        <!-- connection -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link font-medium-3 me-50"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                <span class="fw-bold">Кнопка 4</span>
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

{{--                        </div>--}}
                        <form  href="{{ route('account.store') }}"  class="validate-form mt-2 pt-50" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @method('POST')
                            <div class="card-body mb-75">
                                <div class="d-flex ">
                                <a href="#" class="mb-75">
                                    <img src="{{asset('/storage/' )}}" id="account-upload-img" class="uploadedAvatar rounded" alt="profile image" height="100" width="100" />
                                </a>
                                <!-- upload and reset button -->
                                <div class="d-flex align-items-end mb-75 ms-1">
                                    <div>
{{--                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Изменить</label>--}}
{{--                                        <input type="file" name="logo" id="account-upload" hidden accept="image/*" />--}}
{{--                                        <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>--}}
{{--                                        <p class="mb-0">Только: png, jpg, jpeg.</p>--}}
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
                                        <input type="text" disabled class="form-control" id="accountFirstName" name="firstName" value="" data-msg="" >
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountPhoneNumber">БИК банка</label>
                                        <input type="tel" disabled class="form-control account-number-mask" id="accountPhoneNumber" name="phoneNumber"  value="">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountEmail">Фирменное наименование</label>
                                        <input type="email" disabled class="form-control" id="accountEmail" name="email" placeholder="Бренд">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountOrganization">Кор/ счет</label>
                                        <input type="text" disabled class="form-control" id="accountOrganization" name="organization"  value="" aria-invalid="false" maxlength="20">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountPhoneNumber">Юридический адрес</label>
                                        <input type="text" disabled class="form-control account-number-mask" id="accountPhoneNumber" name="phoneNumber" value="">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountAddress">Расчётный счет</label>
                                        <input type="text" disabled class="form-control" id="accountAddress" name="address">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountState">Почтовый адрес</label>
                                        <input type="text" disabled class="form-control" id="accountState" name="state" placeholder="Индекс, Город, Улица, номер дома, номер офиса" >
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">ФИО контактного лица</label>
                                        <input type="text" disabled class="form-control account-zip-code" id="accountZipCode" name="zipCode"  placeholder="ФИО полностью" maxlength="50">
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">ИНН</label>
                                        <input type="text" disabled class="form-control" required name="" min="3" maxlength="12">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">E-mail контактного лица</label>
                                        <input type="email" disabled class="form-control" >
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">ОГРН</label>
                                        <input type="text" disabled class="form-control account-zip-code" id="accountZipCode" maxlength="15">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Телефон организации</label>
                                        <input type="text" disabled class="form-control account-zip-code" id="accountZipCode" name="zipCode" placeholder="ФИО полностью" maxlength="15">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">КПП</label>
                                        <input type="text" disabled class="form-control account-zip-code" id="accountZipCode" name="zipCode"  maxlength="9">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Телефон контактного лица</label>
                                        <input type="text" disabled class="form-control account-zip-code" id="accountZipCode" name="zipCode"  maxlength="15">
                                    </div>

                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="accountZipCode">Наименование банка</label>
                                        <input type="text" disabled class="form-control account-zip-code" id="accountZipCode" name="zipCode"  maxlength="50">
                                    </div>

{{--                                    <button type="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Изменить/добавить информацию</button>--}}
                          </form>
                        <!--/ form -->
                    </div>
                </div>
                <!--/ profile -->
            </div>
        </div>
    </section>
@endsection
