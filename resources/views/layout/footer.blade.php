<div id="footer">
  <div id="footer_inner">
    <div class="columns">
      <div class="widget">
        <h6 align="center">Bài viết gần đây</h6>
        <ul class="recent_posts">
          @php
            $dem = 1;
          @endphp
          @foreach($tintucShare as $ttsh)
            @if($dem < 6 )
              <li class="clearfix">
                <h3 class="title"><a href="tintuc/{{$ttsh->id}}/{{$ttsh->TieuDeKhongDau}}.html">{{ $ttsh->TieuDe }}</a></h3>
              </li>
            @endif
            @php
              $dem++;
            @endphp
          @endforeach
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="columns" style="width:15% !important;">
      <div class="widget">
        <h6 align="center">Đường dẫn nhanh</h6>
        <ul class="quick_links" align="center">
          @php
            $countFlas = 1;
          @endphp
          @foreach($theloaiShare as $tl)
            @if($countFlas < 9)
            <li><a href="Javascript::;">{{ $tl->Ten }}</a></li>
            @endif
            @php
              $countFlas++;
            @endphp
          @endforeach
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>

