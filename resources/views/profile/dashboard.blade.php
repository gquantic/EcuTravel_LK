@extends('layouts.meta')


@section('page-title')
    Панель
@endsection

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/base/pages/dashboard-ecommerce.css') }}">
@endsection

@section('body-class')
    pace-done vertical-layout vertical-menu-modern navbar-floating footer-static menu-expanded
@endsection

@section('content')
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-xl-4 col-lg-8 col-md-5">
                <!-- User Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class="d-flex align-items-center flex-column">
                                <img class="img-fluid rounded mt-3 mb-2" src="{{asset('images\slider\05.jpg')}}" height="140" width="140" alt="User avatar">
                                <div class="user-info text-center">
                                    <h4>Пример названия или чего либо </h4>
{{--                                    <span class="badge bg-light-secondary">Author</span>--}}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around my-2 pt-75">
                            <div class="d-flex align-items-start me-2">
                                            <span class="badge bg-light-primary p-75 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check font-medium-2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </span>
                                <div class="ms-75">
                                    <h4 class="mb-0">1.23k</h4>
                                    <small>Tasks Done</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-start">
                                            <span class="badge bg-light-primary p-75 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase font-medium-2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                            </span>
                                <div class="ms-75">
                                    <h4 class="mb-0">568</h4>
                                    <small>Projects Done</small>
                                </div>
                            </div>
                        </div>
{{--                        <h4 class="fw-bolder border-bottom pb-50 mb-1">Д</h4>--}}
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Наименование организации:</span>
                                    <span>{{ Auth::user()->name }}</span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Фирменное наименование:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Юридический адрес:</span>
{{--                                    <span class="badge bg-light-success">Active</span>--}}
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Почтовый адрес:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">ИНН:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">ОГРН:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">КПП:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Наименование банка:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">БИК банка:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Кор/счет:</span>
                                    <span></span>
                                </li>

                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Расчётный счет:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">ФИО контактного лица:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">E-mail контактного лица:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Телефон организации:</span>
                                    <span></span>
                                </li>
                                <li class="mb-75">
                                    <span class="fw-bolder me-25">Телефон контактного лица.:</span>
                                    <span></span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center pt-2">
                                <a href="javascript:void(0)" class="btn btn-primary me-1 waves-effect waves-float waves-light" data-bs-target="#editUser" data-bs-toggle="modal">Перейти в профиль</a>
{{--                                <a href="javascript:void(0)" class="btn btn-outline-danger suspend-user waves-effect">Suspended</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="card invoice-list-wrapper">
                    <div class="card-datatable table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row d-flex justify-content-between align-items-center m-1">
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                        <label> Показать
                                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="dt-action-buttons text-xl-end text-lg-start text-lg-end text-start">
                                        <div class="dt-buttons">
                                            <a class="dt-button btn btn-primary btn-add-record ms-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" href="{{ route('tours.create') }}"><span>Добавить перевозчика</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pe-lg-1 p-0">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                        <label>Поиск<input type="search" class="form-control " placeholder="Search Invoice" aria-controls="DataTables_Table_0"></label>
                                    </div>
                                    <div class="invoice_status ms-sm-2"></div>
                                </div>
                            </div>
                            <table class="invoice-list-table table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th class="control sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="display: none;"></th>
                                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 46px;" aria-sort="descending" aria-label="#: activate to sort column ascending">
                                        #
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 42px;" aria-label=": activate to sort column ascending">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 270px;" aria-label="Client: activate to sort column ascending">
                                        Client
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 73px;" aria-label="Total: activate to sort column ascending">
                                        Total
                                    </th>
                                    <th class="text-truncate sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 130px;" aria-label="Issued Date: activate to sort column ascending">
                                        Дата поездки
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Balance: activate to sort column ascending">
                                        Билетов
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd" onclick="window.location.href = '{{route('tours.index')}}'">
                                    <td valign="top" colspan="7" class="dataTables_empty">Подробнее...</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between mx-2 row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Показано 0 to 0 of 0 записей</div>
                                </div><div class="col-sm-12 col-md-6">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a>
                                            </li>
                                            <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-app-design">
                    <div class="card-body">
                        <span class="badge badge-light-primary">{{ date('d M Y ') }}</span>
                        <h4 class="card-title mt-1 mb-75 pt-25">Статистика</h4>
                        <div class="design-group mb-2 pt-50">
                            <h6 class="section-label">Маршруты</h6>
                            <span class="badge badge-light-warning me-1">Figma</span>
                            <span class="badge badge-light-primary">Wireframe</span>
                        </div>
                        <div class="design-group pt-25">
                            <h6 class="section-label">Перевозчики</h6>
                            <div class="avatar">
                                <img src="/images/portrait/small/avatar-s-9.jpg" width="34" height="34" alt="Avatar">
                            </div>
                            <div class="avatar bg-light-danger">
                                <div class="avatar-content">PI</div>
                            </div>
                            <div class="avatar">
                                <img src="/images/portrait/small/avatar-s-14.jpg" width="34" height="34" alt="Avatar">
                            </div>
                            <div class="avatar">
                                <img src="/images/portrait/small/avatar-s-7.jpg" width="34" height="34" alt="Avatar">
                            </div>
                            <div class="avatar bg-light-secondary">
                                <div class="avatar-content">AL</div>
                            </div>
                        </div>
                        <div class="design-planning-wrapper mb-2 py-75">
                            <div class="design-planning">
                                <p class="card-text mb-25">Проданых билетов</p>
                                <h6 class="mb-0">12</h6>
                            </div>
                            <div class="design-planning">
                                <p class="card-text mb-25">Сумма</p>
                                <h6 class="mb-0">$49251.91</h6>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary w-100 waves-effect waves-float waves-light">К справочнику</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
