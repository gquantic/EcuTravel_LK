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
                    <!-- profile -->
                    <div class="card">

                        <div class="card-header border-bottom">
                            <h4 class="card-title">Детали профиля</h4>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary mt-1 me-1 waves-effect waves-float waves-light">Изменить/добавить информацию</button>
                                {{--                                    <button type="reset" class="btn btn-outline-secondary mt-1 waves-effect">Вернуть изменения</button>--}}
                            </div>

                        </div>
                        <form  href="{{ route('account.store') }}"  class="validate-form mt-2 pt-50" method="" novalidate="novalidate">
                            @csrf
                            @method('PUT')
                            <div class="card-body py-2 my-25">
                                <!-- header section -->
                                <div class="d-flex">
                                    <a href="#" class="me-25">
                                        <img src="{{asset('/storage/' . $account)}}" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100">
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="d-flex align-items-end mt-75 ms-1">
                                        <div>
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">Загрузить лого</label>
                                            <input type="file" id="account-upload" hidden="" accept="image/*">
                                            {{--                                    <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75 waves-effect">Reset</button>--}}
                                            <p class="mb-0">Разрешенные типы файлов: png, jpg, jpeg.</p>
                                        </div>
                                    </div>
                                    <!--/ upload and reset button -->
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
                                        <label class="form-label" for="accountEmail">Фирменное наименование</label>
                                        <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Бренд">
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
                                        <input type="text" class="form-control" required name="" min="3" maxlength="12">
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

                                </div>
                        </form>
                        <!--/ form -->
                    </div>
                </div>
                <!--/ profile -->
            </div>
        </div>

        </div>
    </section>
@endsection
