<a href="{{ route('compare') }}" class="nav-box-link">
    <i class="fa fa-compress text-dark"></i>
    {{-- <span class="nav-box-text d-none d-lg-inline-block">{{__('Compare')}}</span> --}}
    @if(Session::has('compare'))
        <sup class="nav-box-number">{{ count(Session::get('compare'))}}</sup>
    @else
        <sup class="nav-box-number">0</sup>
    @endif
</a>
