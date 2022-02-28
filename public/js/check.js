function LSP_check() {
    var check = true;
    var tenloai = document.getElementById('ten').value;
    if (tenloai === "" || tenloai === null) {
        document.getElementById('tenTB').innerHTML = "Vui lòng nhập tên loại sản phẩm.";
        check = false;
    } else {
        // tenloaiBTCQ = /^[^\~\`\!\@\#\$\%\^\&\*\)\(\]\[\\\;\'\,\.\/\+\-\=\_\"\}\{\|\:\?\>\<]{2,30}$/;
        tenloaiBTCQ = /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ0-9\s]{2,30}$/;
        if (tenloaiBTCQ.test(tenloai) === true) {
            document.getElementById('tenTB').innerHTML = " ";
        } else {
            document.getElementById('tenTB').innerHTML = "Tên loại sản phẩm dài từ 2 đến 30 ký tự và không chứa ký tự đặc biệt";
            check = false;
        }
    }
    console.log(check);
    return check;
}

function DMSP_check() {
    var check = true;
    var tenloai = document.getElementById('id_loai').value;
    // document.getElementById('tenloai_TB').innerHTML = tenloai;
    // check = false;
    if (tenloai === "null") {
        document.getElementById('tenloai_TB').innerHTML = "Vui lòng chọn loại sản phẩm.";
        check = false;
    }

    var tendm = document.getElementById('tendm').value;
    if (tendm === "" || tendm === null) {
        document.getElementById('tendm_TB').innerHTML = "Vui lòng nhập tên danh mục sản phẩm.";
        check = false;
    } else {
        // tenloaiBTCQ = /^[^\~\`\!\@\#\$\%\^\&\*\)\(\]\[\\\;\'\,\.\/\+\-\=\_\"\}\{\|\:\?\>\<]{2,30}$/;
        tendmBTCQ = /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ0-9\s]{2,30}$/;
        if (tendmBTCQ.test(tendm) === true) {
            document.getElementById('tendm_TB').innerHTML = " ";
        } else {
            document.getElementById('tendm_TB').innerHTML = "Tên danh mục sản phẩm dài từ 2 đến 30 ký tự và không chứa ký tự đặc biệt";
            check = false;
        }
    }
    console.log(check);
    return check;
}

function SP_check() {
    var check = true;
    //Danh mục SP
    var tendm = document.getElementById('id_dm').value;
    if (tendm === "null") {
        document.getElementById('tendm_TB').innerHTML = "Vui lòng chọn danh mục sản phẩm.";
        check = false;
    }

    //Tên SP 
    var tensp = document.getElementById('tensp').value;
    if (tensp === "" || tensp === null) {
        document.getElementById('tensp_TB').innerHTML = "Vui lòng nhập tên sản phẩm";
        check = false;
    } else {
        BTCQ = /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ0-9\s]{2,30}$/;
        if (BTCQ.test(tensp) === true) {
            document.getElementById('tensp_TB').innerHTML = " ";
        } else {
            document.getElementById('tensp_TB').innerHTML = "Tên sản phẩm dài từ 2 đến 30 ký tự và không chứa ký tự đặc biệt";
            check = false;
        }
    }

    //Giá SP
    var giasp = document.getElementById('giasp').value;
    if (giasp === "" || giasp === null) {
        document.getElementById('giasp_TB').innerHTML = "Vui lòng nhập giá sản phẩm";
        check = false;
    } else {
        BTCQ = /^[0-9]{6,8}$/;
        if (BTCQ.test(giasp) === true) {
            document.getElementById('giasp_TB').innerHTML = " ";
        } else {
            document.getElementById('giasp_TB').innerHTML = "Giá sản phẩm từ 100000, không chứa chữ và ký tự đặc biệt";
            check = false;
        }
    }

    //Số lượng
    var slsp = document.getElementById('slsp').value;
    if (slsp === "" || slsp === null) {
        document.getElementById('slsp_TB').innerHTML = "Vui lòng nhập số lượng sản phẩm";
        check = false;
    } else {
        BTCQ = /^[0-9]{1,5}$/;
        if (BTCQ.test(slsp) === true) {
            document.getElementById('slsp_TB').innerHTML = " ";
        } else {
            document.getElementById('slsp_TB').innerHTML = "Số lượng sản phẩm không chứa chữ và ký tự đặc biệt";
            check = false;
        }
    }

    //Hình ảnh
    // var hasp = document.getElementById('hasp').value;
    // if (hasp === "" || hasp === null) {
    //     document.getElementById('hasp_TB').innerHTML = "Vui lòng chọn hình ảnh sản phẩm.";
    //     check = false;
    // }

    //Mô tả
    var mtsp = document.getElementById('mota').value;
    if (mtsp === "" || mtsp === null) {
        document.getElementById('mtsp_TB').innerHTML = "Vui lòng nhập mô tả sản phẩm.";
        check = false;
    }
    console.log(check);
    return check;
}

function signUp_check() {
    var check = true;

    //Username
    usernameBTCQ = /^[a-zA-Z0-9]{4,12}$/;
    var username = document.getElementById('username').value;
    if (usernameBTCQ.test(username) === true) {
        document.getElementById('username_TB').innerHTML = " ";
    } else {
        document.getElementById('username_TB').innerHTML = "Tên đăng nhập từ 4 đến 12 ký tự và không chứa ký tự đặc biệt";
        check = false;
    }

    //Password
    pwBTCQ = /^(?=.*\d)(?=.*[a-zA-Z])[A-Za-z0-9!@#\$%\^\&*\)\(]{6,32}$/;
    var pw = document.getElementById('pw').value;
    if (pwBTCQ.test(pw) === true) {
        document.getElementById('password_TB').innerHTML = " ";
    } else {
        document.getElementById('password_TB').innerHTML = "Mật khẩu chưa đúng định dạng";
        check = false;
    }
    return check;
}

function SLM_check() {
    var check = true;

    var SLM = parseInt(document.getElementById('sl-mua').value);
    //console.log(parseInt(SLM));
    var SLT = parseInt(document.getElementById('sl-ton').textContent);
    //console.log(SLT);
    if (SLM > SLT) {
        document.getElementById('thongbao').innerHTML = "Số lượng mua tối đa là " + SLT;
        check = false;
    } else {
        document.getElementById('thongbao').innerHTML = " ";
    }

    console.log(check);
    return check;
}