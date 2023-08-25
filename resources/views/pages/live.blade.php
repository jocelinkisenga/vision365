
@extends('layouts.main')

@section("content")

<main class="wrapper mt-6">
    <iframe src="https://www.scorebat.com/embed/livescore/" frameborder="0" width="600" height="760"  style="width:80%;height:760px;overflow:hidden;display:block; margin-top:10%" class="_scorebatEmbeddedPlayer_"></iframe><script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://www.scorebat.com/embed/embed.js?v=arrv'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'scorebat-jssdk'));</script>

</main>


@endsection
