<div class="menu">
    <div class="logo_content">
        <div class="logo">
            <img src="{{ asset('upload/logo.PNG') }}" alt="logo" style="width: 100px; height: 100px">
            <div class="logo_name">NK CLOTHINGS</div>
        </div>
    </div>
    <ul class="menu_list">
        <li>
            <i class='bx bx-search' ></i>
            <input type="text" placeholder="Search...">
            
        </li>
        <li>
            <a href="{{ route('home') }}">
                <i class='bx bxs-home'></i>
                <span class="link_name">Trang chính</span>
            </a>
        </li>
        <li>
            <a href="{{ route('list-LSP') }}">
                <i class='bx bxs-grid'></i>
                <span class="link_name">Loại sản phẩm</span>
            </a>
        </li>
        <li>
            <a href="{{ route('list-DMSP') }}">
                <i class='bx bx-border-all'></i>
                <span class="link_name">Danh mục sản phẩm</span>
            </a>
        </li>
        <li>
            <a href="{{ route('list-SanPham') }}">
                <i class='bx bx-closet'></i>
                <span class="link_name">Sản phẩm</span>
            </a>
        </li>
        <li>
            <a href="{{ route('list-HoaDon') }}">
                <i class='bx bxs-cart-add' ></i>
                <span class="link_name">Đơn hàng</span>
            </a>
        </li>
        <li>
            <a href="{{ route('list-ThanhVien') }}">
                <i class='bx bx-group' ></i>
                <span class="link_name">Thành viên</span>
            </a>
        </li>        
       {{-- <li>
            <a href="{{ route('list-DanhGia') }}">
                <i class='bx bxs-star-half' ></i>
                <span class="link_name">Đánh giá</span>
            </a>
        </li>
         <li>
            <a href="#">
                <i class='bx bxs-gift' ></i>
                <span class="link_name">Khuyến mãi</span>
            </a>
        </li>
        <li>
            <a href="{{ route('list-Slide') }}">
                <i class='bx bx-slideshow' ></i>
                <span class="link_name">Slide</span>
            </a>
        </li> --}}
    </ul>
    <div class="profile_content">
        <div class="profile">
            <div class="profile_details">
                <img src="{{ asset('upload/admin1.PNG') }}">
                <div class="name_job">
                    <div class="name">{{ $admin_login->username }}</div>
                    <div class="job">Admin</div>
                </div>
            </div>
            <a href="{{ route('logout') }}" style="color: white;"><i class='bx bx-log-out' id="log_out"></i></a>            
        </div>
    </div>
</div>

<div class="header">
    <div class="text">THƯƠNG HIỆU THỜI TRANG NK</div>
</div>