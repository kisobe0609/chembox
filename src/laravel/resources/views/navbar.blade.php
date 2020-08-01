<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#"><i class="fas fa-flask"></i></a>
  </a>
  <div class="collapse navbar-collapse">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">質問する</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">調べる</a>
      </li>
  </ul>
  </div>
  @if (Route::has('login'))
  <ul class="navbar-nav">         
    @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}さん、こんにちは！
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">マイページ</a>
          <a class="dropdown-item" href="#">質問一覧</a>
          <a class="dropdown-item" href="#">回答一覧</a>
          <a class="dropdown-item" href="#">設定</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          ログアウト
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
          </form>
        </div>
      </li>
    @else
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ゲストさん、こんにちは！
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('login') }}">ログイン</a>
          <a class="dropdown-item" href="#">新規登録</a>
        </div>
      </li>
    @endauth
  @endif
  </ul>
</nav>