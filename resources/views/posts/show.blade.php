<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel課題-投稿結果</title>
</head>
<body>
  <table>
    <tr>
      <th>ID</th>
      <td>{{ $posts->id }}</td>
      <th>タイトル</th>
      <td>{{ $posts->title }}</td>
      <th>本文</th>
      <td>{{ $posts->content }}</td>
      <th>作成日時</th>
      <td>{{ $posts->created_at }}</td>
      <th>更新日時</th>
      <td>{{ $posts->updated_at }}</td>
    </tr>
  </table>

  <a href="{{ url('/posts') }}">戻る</a>
</body>
</html>