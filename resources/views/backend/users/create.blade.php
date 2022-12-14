@extends('backend.layout')
@section('content')
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">User Ekleme</h3>
            </div>
            <div class="box-body">
                <form action="{{route('users.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Resim Seç</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" name="user_file"  type="file">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Ad Soyad</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="user_name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kullanıcı Adı (Email)</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Şifre</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Durum</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="status" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <label>Rolü</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <select name="role" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>

                        <div align="right" class="box-footer">
                            <button type="submit" class="btn btn-success">User Ekleme</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('css')@endsection
@section('js')@endsection
