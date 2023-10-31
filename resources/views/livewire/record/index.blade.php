<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Các thẻ meta, title và các tệp CSS khác -->
</head>
<body>
    {{-- @include('layouts.header') <!-- Bao gồm header view ở đây --> --}}
    @extends('layouts.header')
    @section('header')
    <div class="container">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mt-5">TOOL CHECK LỊCH SỬ CUỘC GỌI</h5>
                        <hr>
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Chiến dịch</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <fieldset class="form-group">
                                <div class="row">
                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Radios</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">First radio</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">Second radio</label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                            <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-sm-3">Checkbox</div>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">Example checkbox</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn  btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mt-5">Horizontal Form Label Sizing</h5>
                        <hr>
                        <form>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabelLg" class="col-sm-3 col-form-label col-form-label-lg">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    @endsection

</body>
</html>
