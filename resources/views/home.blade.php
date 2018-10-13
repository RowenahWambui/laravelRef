@extends('layouts.master')

@section('content')
      
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <section class="content">
                        <div class="row">
                            <div class="col-lg-4 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-aqua">
                                <div class="inner">
                                  <h3>1</h3>
                    
                                  <p>New Message</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <div class="col-lg-4 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                      <div class="inner">
                                        <h3>1</h3>
                          
                                        <p>New Modification</p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion ion-bag"></i>
                                      </div>
                                      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                            <div class="col-lg-4 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-yellow">
                                <div class="inner">
                                  <h3>2</h3>
                    
                                  <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </section>
@endsection
