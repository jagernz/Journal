@extends('layouts.index')

@section('content')

<br>
<div class="row">
    <div class="col-lg-2 col-lg-offset-1" id="leftpart">

        <div class="dayClick">
            <h2></h2>
        </div>

        <div class="information">

            <form class="form-inline">
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" class="form-control" id="name" placeholder="Имя персоны">
                </div>
                <br>
                <button type="button" class="btn btn-primary" id="addPerson">Добавить персону</button>
            </form>

        </div>
    </div>
    <div class="col-lg-9">
        <div id='calendar' class="container"></div>
    </div>
    </div>


@endsection