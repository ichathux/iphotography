@extends('layouts.admin')

@section('content')


<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

    					<h3>Dashboard<span class="label label-default"></span></h3>
                         
    <h4>Hello {{ Auth::user()->name }}<span class="label label-default"></span></h4>
                            
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>

@endsection

