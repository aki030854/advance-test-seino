<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
            <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="fullname"  value="{{ old('name') }}" />
            
            </div>
            <div class="example">例）山田 太郎</div>
            <div class="form__error">
              @error('fullname')
              {{ $message }}
              @enderror
            </div>
            
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input-text">
              <input type="radio" name="gender" value="男性" checked />男性
              <input type="radio" name="gender" value="女性"/>女性 
              <br>
  
            </div>
            
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
       
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="example">例）test@example.com</div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              〒<input type="text" name="postcode" value="{{ old('postcode') }}"/>
            </div>
            <div class="example">例）123-4567</div>
            <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" value="{{ old('address') }}" />
            </div>
            <div class="example">例）東京都渋谷区千駄ヶ谷1-2-3</div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
        </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="Building_name" value="{{ old('Building_name') }}"/>
            </div>
            <div class="example">例）千駄ヶ谷マンション101</div>
            <div class="form__error">
             @error('Building_name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="opinion" value="{{ old('opinion') }}"></textarea>
            </div>
            <div class="form__error">
             @error('opinion')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
      
    </div>
    </main>
</body>

</html>