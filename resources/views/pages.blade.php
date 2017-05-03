{!! view('layout/header') !!}

<div class="content-wrapper">

    <div class="row">
        <div class="content">
            <div class="inner-content">
                @foreach ($pageContent as $page)
                    <p> {{ $page->title }}</p>
                @endforeach
            </div>
        </div>

        {!! view('layout/sidebar/sidebar') !!}
    </div>

</div>

{!! view('layout/footer') !!}