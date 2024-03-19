<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/admin">
        FashionablyLate
      </a>
      <div class="form__button">
          <button class="form__button-submit" type="submit">logout</button>
        </div>
    </div>
  </header>

<main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Admin</h2>
      </div>

    <nav>
        <div class="form__input--text">
              <input type="email" name="email" placeholder="名前やメールアドレスを入力してください" />
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">性別</button>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">お問い合わせの種類</button>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">年/月/日</button>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">検索</button>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">リセット</button>
        </div>
    </nav>

    
</main>
