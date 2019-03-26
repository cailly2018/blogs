<ul class="pagination pagination-sm m-b-20">
    <li class="page-item">
        <a class="page-link waves-effect" href="@if($currentPage >1) {{$pages_all}}?page={{$currentPage-1}}{{$s_all}}@endif" aria-label="Previous">
            <span aria-hidden="true">«</span>
            <span class="sr-only">上一页</span>
        </a>
    </li>

    @foreach ($page_s as $key=> $page)
        <li class="page-item">
            <a class="page-link waves-effect" @if( $page == $currentPage)style="background-color: #1b8bf9;" @endif href="{{$pages_all}}?page={{$page}}{{$s_all}}" role="button">{{$page}}</a>
        </li>
    @endforeach
    <li class="page-item">
        <a class="page-link waves-effect" href="{{$pages_all}}?page={{$currentPage+1}}{{$s_all}}" aria-label="Next">
            <span aria-hidden="true">»</span>
            <span class="sr-only">下一页</span>
        </a>
    </li>
</ul>