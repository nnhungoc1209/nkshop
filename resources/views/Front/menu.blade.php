<div class="menu">
    <nav>
        {{-- <img class="logo" src="upload/logo.PNG" alt="logo"> --}}
        <img class="logo" src="{{ asset('upload/logo.PNG') }}" alt="logo">
            <ul class="parent">
                <li><a href="{{ route('mainPage') }}">TRANG CHỦ</a></li>
                <li><a href="{{ route('showSP') }}">SẢN PHẨM <i class='bx bxs-chevron-down'></i></a>
                    <ul class="child">
                        @foreach ($lsp as $LSP)
                            <li><a href="{{ route('showLSP', ['id'=>$LSP->id_loai]) }}">{{ $LSP->TenLoai }}
                                @if (count($LSP->DanhMucSP) > 0)
                                    @if ($LSP->TenLoai != $LSP->DanhMucSP[0]->TenDanhMuc)
                                        <i style="transform: rotate(-90deg);" class='bx bxs-chevron-down'></i> </a>
                                        <ul class="grandchild">
                                            @foreach ($LSP->DanhMucSP as $DMSP)
                                                <li><a href="{{ route('showDMSP', ['iddm'=>$DMSP->id_danhmuc]) }}">{{ $DMSP->TenDanhMuc }}</a></li>
                                            @endforeach
                                        </ul>
                                    @else </a> 
                                    @endif
                                @else</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="search">
                    <a href="#">
                        <i class='bx bx-search'></i> Tìm kiếm 
                    </a>
                    <ul class="child search">
                        <li id="search">
                            <form action="{{ route('search')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="keyword" placeholder="Nhập từ khóa...">
                                <button type="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </li>
                    </ul>
                </li>

                <li class="user">
                    <a href="">
                        <i class='bx bxs-user'></i> Tài khoản 
                    </a>
                    <ul class="child">
                        @if (isset($user_login))
                            <li style="text-align: center"><a href="#">{{ $user_login->username }}</a></li>
                            <li style="text-align: center"><a href="{{ route('logout') }}"> <i class='bx bx-log-out' id="log_out"></i>&nbsp;&nbsp;Đăng xuất</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Đăng ký</a></li>
                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                        @endif
                        
                    </ul>
                </li>

                <li class="cart">
                    <a href="{{ route('show-cart') }}">
                        <i class='bx bxs-cart'></i> Giỏ hàng 
                    </a>
                </li>
            </ul>            
    </nav>
</div>