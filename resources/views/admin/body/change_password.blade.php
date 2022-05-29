@extends('admin.admin_master')

@section('admin')

<div class="content-wrapper">
          <div class="content">
            <div class="row">
              <div class="col-lg-6">
                <div class="card card-default">
                  <div class="card-header card-header-border-bottom">
                    <h2>Masked Input</h2>
                  </div>
                  <div class="card-body">
                    <label class="text-dark font-weight-medium" for=""
                      >Date input</label
                    >
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-calendar-range"></i>
                        </span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        data-mask="00/00/0000"
                        placeholder=""
                        aria-label=""
                      />
                    </div>
                    <p style="font-size: 90%">ex. 99/99/9999</p>
                    <label class="text-dark mt-4 font-weight-medium" for=""
                      >Phone input</label
                    >
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-phone"></i>
                        </span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        data-mask="(999) 999-9999"
                        placeholder=""
                        aria-label=""
                      />
                    </div>
                    <p style="font-size: 90%">ex. (999) 999-9999</p>
                    <label class="text-dark mt-4 font-weight-medium" for=""
                      >Taxpayer Identification Numbers</label
                    >
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-currency-usd"></i>
                        </span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        data-mask="99-9999999"
                        placeholder=""
                        aria-label=""
                      />
                    </div>
                    <p style="font-size: 90%">ex. 99-9999999</p>
                    <label class="text-dark mt-4 font-weight-medium" for=""
                      >Social Security Number</label
                    >
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-security-account-outline"></i>
                        </span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        data-mask="999-99-9999"
                        placeholder=""
                        aria-label=""
                      />
                    </div>
                    <p style="font-size: 90%">ex. 999-99-9999</p>
                    <label class="text-dark mt-4 font-weight-medium" for=""
                      >Eye Script</label
                    >
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-eye"></i>
                        </span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        data-mask="~9.99 ~9.99 999"
                        placeholder=""
                        aria-label=""
                      />
                    </div>
                    <p style="font-size: 90%">ex. ~9.99 ~9.99 999</p>
                    <label class="text-dark mt-4 font-weight-medium" for=""
                      >Credit Card Number</label
                    >
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="mdi mdi-credit-card"></i>
                        </span>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        data-mask="9999 9999 9999 9999"
                        placeholder=""
                        aria-label=""
                      />
                    </div>
                    <p style="font-size: 90%">ex. 9999 9999 9999 9999</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-default">
                  <div class="card-header card-header-border-bottom">
                    <h2>Multiple Select</h2>
                  </div>
                  <div class="card-body">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection