@extends('layouts.shop')

@section('title')
    Добавить предмет
@endsection

@section('content')
    <div id="content-container">
        <div class="z-depth-1 content-header text-center">
            <h1><i class="fa fa-diamond fa-lg fa-left-big"></i>Добавить предмет</h1>
        </div>
        <form method="post" action="{{ route('admin.items.add.save', ['server' => $currentServer->id]) }}">
            <div id="s-change-name" class="mt-3">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-xs-0">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 col-12 text-center">
                            <div class="md-form text-left">
                                <i class="fa fa-font prefix"></i>
                                <input type="text" name="item_name" id="item-name" class="form-control" value="">
                                <label for="item-name">Название предмета</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="s-settings-cat">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-xs-0">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3 col-12">
                            <div class="plus-category">
                                <div class="md-form text-left">
                                    <i class="fa fa-list prefix"></i>
                                    <input type="text" name="extra_name" id="extra-name" class="form-control" value="">
                                    <label for="extra-name">Extra</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 offset-sm-3 col-12 save-and-del text-center">
                            {{ csrf_field() }}
                            <button class="btn btn-info"><i class="fa fa-check fa-left"></i>Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection