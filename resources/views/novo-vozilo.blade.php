@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">




            <div class="panel panel-default">
                <div class="panel-heading">Novi Nalog</div>
                <div class="panel-body">

                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="/novo-vozilo" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="tablice" class="col-sm-2 control-label">Tablice</label>

                            <div class="col-sm-3">
                                <input type="text" name="tablice" id="task-tablice" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="marka" class="col-sm-2 control-label">Marka Vozila</label>

                            <div class="col-sm-3">
                                <input type="text" name="marka" id="task-marka" class="form-control">
                            </div>
                        </div>
                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Dodaj
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>




        </div>
    </div>
</div>

@endsection
