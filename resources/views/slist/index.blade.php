@extends('layouts.app')
@section('content')
<div class="conetnt">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            {{_("WELCOME")}}
                        </p>
                    </div>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div> <button type="button" class="btn btn-block bg-gradient-secondary btn-lg"> ADD ACCOUNT </button> </div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>       
</div>      


<div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>DATE</th>
                      <th>STATUS</th>
                      <th>Gender</th>
                      
                    </tr>
                  </thead>



                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>1001</td>
                      <td><span>Marco Padua</span></td>
                      <td><span>June 29 2003</span></td>
                      <td><span>foodtrip lang sa gedli</span></td>
                      <td>Male</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>1002</td>
                      <td><span>Edmar Aniciete</span></td>
                      <td><span>July 08 2003</span></td>
                      <td><span>Babaero</span></td>
                      <td>Male</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>1003</td>
                      <td><span>William Ken Emperado</span></td>
                      <td><span>July 15 2004</span></td>
                      <td><span>Torpe</span></td>
                      <td>Male</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>1004</td>
                      <td><span>Paul Sedrick Bautista</span></td>
                      <td><span>February 25 2004</span></td>
                      <td><span>Sigma daw edi wow</span></td>
                      <td>Male</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
@endsection