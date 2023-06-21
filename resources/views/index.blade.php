<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container my-5">
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            <!-- アップロードフォームの作成 -->
            <input type="file" name="image">
            @csrf
            <input type="submit" value="アップロード">
        </form>
        <div class="mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">画像</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td><img src="{{ \Storage::disk('s3')->url($post->image_path) }}" style="width:30%"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
