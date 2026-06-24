<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container" style="max-width: 400px; margin-top: 80px;">
    <div class="card shadow-sm">
        <div class="card-body p-4">
            <h4 class="text-center mb-4">註冊</h4>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">名稱</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">密碼</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">確認密碼</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">註冊</button>
            </form>

            <div class="text-center mt-3">
                <a href="/login" class="text-decoration-none">已有帳號?登入</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>