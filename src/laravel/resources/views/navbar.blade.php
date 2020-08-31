<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="{{ route('index') }}"><i class="fas fa-flask"></i></a>
  </a>
  <div class="collapse navbar-collapse">
  <ul class="navbar-nav">
    @if (Route::has('login'))
    @auth
      <li class="nav-item">
        <a class="nav-link" href="{{ route('ask') }}">質問する</a>
      </li>
    @endauth
    @endif
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">調べる</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($categories as $category)
              <a class="dropdown-item" href="{{ route('posts.closed_category', ['id' => $category->id]) }}">{{ $category->category_name }}</a>
          @endforeach
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('posts.closed') }}">全て</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">答える</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach($categories as $category)
              <a class="dropdown-item" href="{{ route('posts.open_category', ['id' => $category->id]) }}">{{ $category->category_name }}</a>
          @endforeach
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('posts.open') }}">全て</a>
        </div>
      </li>
  </ul>
  </div>
  @if (Route::has('login'))
  @auth
  <ul class="navbar-nav">
      @if(App\User::find(Auth::user()->id)->unreadnotifications->count())         
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell"></i>
            <span class="badge badge-pill badge-danger">{{ App\User::find(Auth::user()->id)->unreadnotifications->count() }}</span>
        </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach(App\User::find(Auth::user()->id)->unreadnotifications as $notification)
              <a class="dropdown-item" href="#">{{ $notification->data['text'] }}</a>
            @endforeach
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('markAsRead') }}"><i class="fas fa-check"></i>全ての通知を既読にする</a>
          </div>
      </li>
      @else
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-bell"></i>
        <span class="badge badge-pill badge-secondary">0</span>
        </a>
        </li>
      @endif
  </ul>
  @endauth
  @endif

  @if (Route::has('login'))
  <ul class="navbar-nav">         
    @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}さん
          @php
            $time = intval(date('H'));
          @endphp
          @if ($time >= 5 && $time < 11)
            、おはようございます！
          @elseif ($time >= 11 && $time < 16)
            、こんにちは！
          @else
            、こんばんは！
          @endif
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('mypage') }}">マイページ</a>
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
          ゲストさん
          @php
            $time = intval(date('H'));
          @endphp
          @if ($time >= 5 && $time < 11)
            、おはようございます！
          @elseif ($time >= 11 && $time < 16)
            、こんにちは！
          @else
            、こんばんは！
          @endif
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