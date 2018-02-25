<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>註冊確認連結</title>
  </head>
  <body>
    <h1>感謝您在 Sample 網註冊</h1>
    <p>請點擊下列連結，以完成註冊：<a href="{{ route('confirm_email', $user->activation_token) }}">{{ route('confirm_email', $user->activation_token) }}</a></p>
    <p>如果這不是你本人的操作，請忽略本連結。</p>
  </body>
</html>