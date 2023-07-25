<!DOCTYPE html>
<html lang="ja">
<head>
    <title>管理システム</title>
</head>
<body>
    <h1>管理システム</h1>
    <form action="../Database/Migrations" method="post">
        <label for="name">お名前</label>
        <input type="text" name="fullname" id="name">
        <label for="gender">性別</label>
         <select name="gender" id="gender">
            <option value="all">全て</option>
            <option value="male">男性</option>
            <option value="female">女性</option>
         </select>
        <label for="date">登録日</label>
        ～<label for="date"></label>
        <input type="date" name="registration" id="registration">
        <label for="email">メール</label>
        <input type="text" name="email" id="email">

        <form class="search-form">
        <div class="search-form__item">
        <input class="search-form__item-input" type="text" />
        </div>
        <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
       </div>
        <input type="reset" value="リセット">
    </form>

</body>
</html>