<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>お問い合わせ内容確認</h2>
      </div>
      <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="{{ $contact['fullname'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <?php
              
                  $gender = $_POST['gender'];
                  if($gender) {
                    echo $gender;
                  }
                ?>
              </td>
            </tr>
            
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">郵便番号</th>
              <td class="confirm-table__text">
                <input type="text" name="post__code" value="{{ $contact['postcode'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="Building" value="{{ $contact['Building_name'] }}"readonly/>
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">ご意見</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['opinion'] }}" readonly/>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
        <div class="return">
            <a href="javascript:history.back()">修正する</a>
        </div>
      </form>
    </div>
  </main>
</body>

</html>