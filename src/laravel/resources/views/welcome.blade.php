@extends('layouts.parent')
@section('title', '化学の質問箱')
@section('pageCss')
<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">
@endsection
@section('content')
<section>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <i class="fas fa-question"></i>化学の質問箱<i class="fas fa-flask"></i>
        </div>

        <div class="links" id="links">
            <a href="#">理論化学</a>
            <a href="#">有機化学</a>
            <a href="#">無機化学</a>
            <a href="#">高分子化合物</a>
            <a href="#">天然有機物</a>
        </div>
        <div class="container">
            <form>
                <input class="form-control form-control-lg mr-sm-2" type="search" aria-label="Search" id="search-input">
                <button class="btn btn-success" type="submit" id="search-button">検索</button>
            </form>
        </div>
    </div>
</div>
</section>
<section class="second-section">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce maximus consequat lacus vitae faucibus. Suspendisse vel sapien at magna interdum fermentum. Nulla blandit euismod elit, non porttitor ante. Suspendisse id metus ut sem congue varius. Sed vestibulum iaculis turpis quis ultrices. Pellentesque tincidunt magna eget diam pulvinar posuere. Integer consequat dolor et tincidunt efficitur. Mauris ut bibendum ante. Sed commodo nisl vel consectetur dignissim. Sed ipsum ligula, mollis eget risus at, sagittis scelerisque risus. Aliquam erat volutpat. Ut egestas, sem vitae lacinia molestie, lacus ex consectetur tortor, sit amet condimentum orci metus et mi.

Vestibulum vulputate convallis rhoncus. Donec vitae sapien tempus, dictum quam ut, euismod tortor. Pellentesque consectetur risus a leo pulvinar sagittis. Nulla ac commodo lacus. Morbi finibus convallis mattis. Nam gravida ut nibh ut viverra. Pellentesque venenatis mollis lectus vel efficitur. Ut aliquet mollis commodo. Vestibulum quis est lacus. Sed augue quam, accumsan ut malesuada eget, vulputate sit amet erat. Curabitur facilisis fringilla cursus. Ut fringilla nunc ac orci molestie, in aliquam leo varius.

Cras nec posuere quam. Sed nibh metus, interdum at ipsum at, dignissim suscipit leo. Vestibulum vel eros ac risus pretium sodales quis vel dolor. In luctus elit enim, et posuere elit tristique sed. Aenean bibendum turpis in facilisis efficitur. Sed rhoncus dolor eget magna aliquet, non placerat turpis maximus. Nam ac rhoncus odio. Donec tincidunt libero tempus, venenatis neque eu, dapibus magna. Suspendisse commodo, lectus vitae tempor euismod, nulla enim sagittis velit, vitae rutrum sapien ante a enim. Proin et posuere lorem. Aliquam hendrerit sit amet diam et varius. Donec molestie nec augue porttitor aliquam. Aliquam volutpat tellus et arcu dapibus, vitae facilisis nisi ultricies.

Sed sollicitudin aliquam arcu non eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut mi eu neque pharetra elementum. Duis eleifend faucibus leo luctus blandit. Suspendisse convallis viverra sapien vitae tempus. In tristique pulvinar velit, sit amet ornare enim. Vestibulum ullamcorper tortor leo, ac pretium neque posuere non. Duis consequat gravida vulputate. Vestibulum sed est justo.

Vestibulum vel mi sollicitudin orci tincidunt hendrerit vel a lorem. Fusce interdum tincidunt imperdiet. Praesent dignissim ligula in turpis sollicitudin, id mattis quam commodo. Vestibulum sit amet neque convallis, porta leo a, tincidunt neque. Aliquam erat volutpat. Nunc ut sollicitudin massa. Cras vel vulputate ante.
<section>
<section class="third-section">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce maximus consequat lacus vitae faucibus. Suspendisse vel sapien at magna interdum fermentum. Nulla blandit euismod elit, non porttitor ante. Suspendisse id metus ut sem congue varius. Sed vestibulum iaculis turpis quis ultrices. Pellentesque tincidunt magna eget diam pulvinar posuere. Integer consequat dolor et tincidunt efficitur. Mauris ut bibendum ante. Sed commodo nisl vel consectetur dignissim. Sed ipsum ligula, mollis eget risus at, sagittis scelerisque risus. Aliquam erat volutpat. Ut egestas, sem vitae lacinia molestie, lacus ex consectetur tortor, sit amet condimentum orci metus et mi.

Vestibulum vulputate convallis rhoncus. Donec vitae sapien tempus, dictum quam ut, euismod tortor. Pellentesque consectetur risus a leo pulvinar sagittis. Nulla ac commodo lacus. Morbi finibus convallis mattis. Nam gravida ut nibh ut viverra. Pellentesque venenatis mollis lectus vel efficitur. Ut aliquet mollis commodo. Vestibulum quis est lacus. Sed augue quam, accumsan ut malesuada eget, vulputate sit amet erat. Curabitur facilisis fringilla cursus. Ut fringilla nunc ac orci molestie, in aliquam leo varius.

Cras nec posuere quam. Sed nibh metus, interdum at ipsum at, dignissim suscipit leo. Vestibulum vel eros ac risus pretium sodales quis vel dolor. In luctus elit enim, et posuere elit tristique sed. Aenean bibendum turpis in facilisis efficitur. Sed rhoncus dolor eget magna aliquet, non placerat turpis maximus. Nam ac rhoncus odio. Donec tincidunt libero tempus, venenatis neque eu, dapibus magna. Suspendisse commodo, lectus vitae tempor euismod, nulla enim sagittis velit, vitae rutrum sapien ante a enim. Proin et posuere lorem. Aliquam hendrerit sit amet diam et varius. Donec molestie nec augue porttitor aliquam. Aliquam volutpat tellus et arcu dapibus, vitae facilisis nisi ultricies.

Sed sollicitudin aliquam arcu non eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut mi eu neque pharetra elementum. Duis eleifend faucibus leo luctus blandit. Suspendisse convallis viverra sapien vitae tempus. In tristique pulvinar velit, sit amet ornare enim. Vestibulum ullamcorper tortor leo, ac pretium neque posuere non. Duis consequat gravida vulputate. Vestibulum sed est justo.

Vestibulum vel mi sollicitudin orci tincidunt hendrerit vel a lorem. Fusce interdum tincidunt imperdiet. Praesent dignissim ligula in turpis sollicitudin, id mattis quam commodo. Vestibulum sit amet neque convallis, porta leo a, tincidunt neque. Aliquam erat volutpat. Nunc ut sollicitudin massa. Cras vel vulputate ante.
<section>
@endsection
