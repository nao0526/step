@extends('layouts.app')

<!-- パンくずリスト -->
@section('breadcrumbs', Breadcrumbs::render('register'))

@section('title', '新規会員登録')

@section('main')
<!-- メインコンテンツ -->
    <div class="p-auth l-row l-row--center">
        <!-- メインカラム -->
        <div class="l-row l-row--center l-row__col12--sm l-row__col10--tab l-row__col08--pc">
            <form method="POST" action="{{ route('register') }}" class="c-form">
                @csrf
                <h1 class="c-title--normal u-mb--5l">新規会員登録</h1>
                <div class="c-form__group">

                    <input type="text" class="c-input c-input--full @error('email') c-input--err @enderror" placeholder="メールアドレス" name="email" value="{{ old('email') }}" autocomplete="email">
                    @error('email')
                        <span class="u-fontcolor--err">{{ $message }}</span>
                    @enderror
                </div>
                <div class="c-form__group">
                    <input type="password" class="c-input c-input--full @error('password') c-input--err @enderror" placeholder="パスワード" name="password" autocomplete="new-password">
                    @error('password')
                        <span class="u-fontcolor--err">{{ $message }}</span>
                    @enderror
                </div>
                <div class="c-form__group">
                    <input type="password" class="c-input c-input--full @error('password_confirmation') c-input--err @enderror" placeholder="パスワード（再入力）" name="password_confirmation" autocomplete="new-password">
                    @error('password_confirmation')
                        <span class="u-fontcolor--err">{{ $message }}</span>
                    @enderror
                </div>
                <div class="c-form__group">
                    <input type="submit" value="新規会員登録" class="c-btn c-btn--medium c-btn--success c-btn--center" onclick="disabledButton(this);">
                </div>
                <div class="c-form__group">
                    <p class="l-row l-row--middle p-auth__lead">すでに登録している方はコチラ</p>
                    <div class="l-row u-position--relative">
                        <a href="{{ route('login') }}" class="c-btn c-btn--medium c-btn--goast c-btn--center">ログイン</a>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
@endsection
