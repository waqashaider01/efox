@extends("admin.layouts.app")
@push('admin-styles')
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/index.css') }}"> --}}
@endpush
@section('admin-content')
    <section>
        <div class="row">
            <div class="col-12">
                <h6 class="content-heading ">
                    Sales Transactions
                </h6>
            </div>
        </div>
        <div class="container">
            <h6>Filter Payements</h6>
            <div class="row">
                <div class="col-md-8">
                    <form action="">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="light-background">
                                    <td width="100px">ID</td>
                                    <td width="200px">Period From</td>
                                    <td width="200px">To</td>
                                    <td width="200px">Username</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="ID" name="ID">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" id="dateFrom" name="dateFrom">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" id="dateTo" name="dateTo">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="username" name="username">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="col-md-4">
                    <button class="btn admin-search-btn">
                        Search
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table admin-table">
                        <tbody>
                            <tr class="light-background">
                                <td><b>ID</b></td>
                                <td><b>Txn</b></td>
                                <td><b>Ad Type</b></td>
                                <td><b>Payer Email</b></td>
                                <td><b>Username</b></td>
                                <td><b>Date</b></td>
                                <td><b>Amount</b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12345678</td>
                                <td>Gallery + Category</td>
                                <td>test@gmail.com</td>
                                <td>ucash24</td>
                                <td>2022-04-17 19:04</td>
                                <td>$25 AUD</td>
                                <td><a href="" class="link-btn">View Payement</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12345678</td>
                                <td>Gallery + Category</td>
                                <td>test@gmail.com</td>
                                <td>ucash24</td>
                                <td>2022-04-17 19:04</td>
                                <td>$25 AUD</td>
                                <td><a href="" class="link-btn">View Payement</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12345678</td>
                                <td>Gallery + Category</td>
                                <td>test@gmail.com</td>
                                <td>ucash24</td>
                                <td>2022-04-17 19:04</td>
                                <td>$25 AUD</td>
                                <td><a href="" class="link-btn">View Payement</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12345678</td>
                                <td>Gallery + Category</td>
                                <td>test@gmail.com</td>
                                <td>ucash24</td>
                                <td>2022-04-17 19:04</td>
                                <td>$25 AUD</td>
                                <td><a href="" class="link-btn">View Payement</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="total-amount">
                        Total: R12000000
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
