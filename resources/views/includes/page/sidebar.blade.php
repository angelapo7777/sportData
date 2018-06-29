<div class="container col-lg-2 col-12 my-3">

    <a href="{{  route("writePost") }}">Αποστολή είδησης</a>

    @if(count($otherSports)>0)
        @include('includes.plugins.other-sports-list')
    @endif

    @if(count($lastMatches)>0)
        @include('includes.plugins.last-matches-list')
    @endif

    @if(count($nextMatches)>0)
        @include('includes.plugins.next-matches-list')
    @endif

    @if(count($seasons)>0)
        @include('includes.plugins.standings-list')
    @endif

    @include('includes.ads.sidebar-google-ad')
</div>