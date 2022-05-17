@extends("layouts.client")
@section("content")
    <style>
        .img-welcome {
            position: absolute;
            width: 385px;
            right: 0;
            top: 150px;
            z-index: -1 !important;
        }

        @media only screen and (max-width: 1518px) {
            .img-welcome {
                display: none !important;
            }

            .img-alight-center {
                text-align-last: center;
            }
        }

        @media only screen and (max-width: 1180px) {
            .img-height-full {
                height: 100%;
                object-fit: cover;
            }
        }

        @media only screen and (max-width: 572px) {
            .img-width-full {
                width: 100% !important;
                object-fit: cover;
            }
        }
    </style>
    <section class="my-5">
        <div class="">
            <img class="m-0 p-0 rounded-20 shadow img-welcome" src="../assets/images/welcome-2.png">
        </div>
        <div class="container m-auto color-web px-3 px-sm-3 px-md-5 px-lg-0">
            <h1 class="text-main">VŨ DUY ĐIỆP</h1>
            <h3 class="m-0 text-main">SỐNG MÃI VỚI NGHỀ XỰA:</h3>
            <h3 class="m-0 text-main">NGƯỜI "GIỮ LỬA" NGHỀ TRUYỀN THỐNG</h3>
        </div>
    </section>
    <section>
        <div class="container row m-auto px-3 px-sm-3 px-md-5 px-lg-0">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <img class="mt-2" src="../assets/images/products-sticker.png">
                <p class="text-monospace font-weight-bold">Năm nay các doanh nghiệp, người làm nghề đúc
                    huyện Ý Yên đón Tết Nguyên đán với tâm thế
                    rộn ràng hơn hẳn khi làng nghề có2nghệ nhân
                    là Dương Bá Dũng, Vũ Duy Điệp (thị trấn Lâm)
                    được Bộ Công Thương trao tặng danh hiệu
                    "Nghệ nhân Ưu tú" cấp Nhà nước trong lĩnh vực
                    thủ công mỹ nghệ vào tháng 12-2020.</p>
            </div>
            <div
                class="col-12 col-sm-6 col-md-6 col-lg-6 text-center text-md-center text-lg-left img-alight-center px-3">
                <img class="mt-2 p-0 rounded-20 shadow img-fluid img-thumbnail img-width-full"
                     src="../assets/images/welcome-1.png">
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container row m-auto px-3 px-sm-3 px-md-5 px-lg-0">
            <div
                class="col-12 col-sm-6 col-md-6 col-lg-6 text-center text-md-center text-lg-left img-alight-center px-3">
                <img class="mt-2 p-0 rounded-20 shadow img-fluid img-thumbnail img-height-full"
                     src="../assets/images/welcome-3.png">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center px3">
                <h1 class="m-0 mt-3 text-main text-center">VŨ DUY ĐIỆP</h1>
                <div class="my-4 mt-3">
                    <img class="pb-4" src="../assets/images/good_projects_stiker.png">
                </div>
                <p class="text-monospace text-left">Chia sẻ của hai Nghệ nhân Ưu tú Dương Bá Dũng
                    (Giám đốc Doanh nghiệp tư nhân Bá Dũng) và Vũ
                    Duy Điệp cho thấy: Điều giúp các ông vưot qua mọi
                    khó khăn, vất vả suốt chặng đường làm nghề cho
                    đến khi được vinh danh nghệ nhân phải kể đến
                    những giá trị, gốc rễ, cội nguồn của làng nghề cũng
                    như sự tương tác, hỗ trợ của các đồng nghiệp trong
                    làng nghề. Các ông may mắn sinh sống trong làng
                    nghề đúc đồng Vạn Điểm, thị trấn Lâm, ngày ngày
                    được gắn bó với các công việc của làng nghề nên có
                    điều kiện thẩm thấu trình độ, kỹ năng làm nghề</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-justify px-3 mt-4">
                <p class="text-monospace">Chia sẻ của hai Nghệ nhân Ưu tú Dương Bá Dũng (Giám đốc Doanh nghiệp tư nhân
                    Bá Dũng) và Vũ Duy Điệp cho thấy: Điều
                    giúp các ông vượt qua mọi khó khăn, vất vả suốt chặng đường làm nghề cho đến khi được vinh danh nghệ
                    nhân phải kể đến
                    những giá trị, gốc rễ, cội nguồn của làng nghề cũng như sự tương tác, hỗ trợ của các đồng nghiệp
                    trong làng nghề. Các ông may
                    mắn sinh sống trong làng nghề đúc đồng Vạn Điểm, thị trấn Lâm, ngày ngày được gắn bó với các công
                    việc của làng nghề nên
                    có điều kiện thẩm thấu trình độ, kỹ năng làm nghề của các bậc cha anh, các truyền nhân đi trước, từ
                    đó tích lũy cho mình các
                    phương pháp làm nghề truyền thống. Với nghệ nhân Vũ Duy Điệp, do chuyên sản xuất các sản phẩm lĩnh
                    vực tượng, đồ thờ đòi
                    hỏi phải thể hiện đúng thần thái của nhân vật nên điểm riêng khác cơ sở sản xuất của ông thường chú
                    trọng là khai thác, phát
                    huy tối đa các giá trị, kỹ xảo làm nghề truyền thống. Để nâng cao tính thẩm mỹ cho các sản phẩm đúc,
                    nghệ nhân Vũ Duy Điệp
                    mạnh dạn học hỏi và cộng tác với các họa sĩ, nhà điêu khắc để sản xuất những sản phẩm đẹp về mẫu mã
                    và kiểu dáng. Bên cạnh
                    đó, nghệ nhân Vũ Duy Điệp còn tập hợp được đội ngũ thợ lành nghề, nhiều người đã trở thành nghệ nhân
                    với danh hiệu “Bàn
                    tay vàng". Ngoài ra, còn tuyển dụng đội ngũ cán bộ, công nhân có bằng trung cấp, đại học để đưa
                    những tiến bộ khoa học kỹ
                    thuật vào sản xuất, tạo sự tinh xảo của sản phẩm, đáp ứng yêu cầu ngày càng cao của khách hàng trong
                    và ngoài nước. Nghệ
                    nhân Điệp cùng cộng sự đã chinh phục thành công công nghệ đúc tượng liền khối với tượng có chiều cao
                    từ 7m đến trên 10m mà
                    chỉ có1khuôn,1lần đúc; đây đang là công nghệ đúc khó, kể cả với các nước có công nghệ đúc phát triển
                    trên thế giới. Trong
                    hành trình miệt mài nghiên cứu và sáng tạo, nghệ nhân Vũ Duy Điệp đã có nhiều công trình, tác phẩm
                    tạo tiếng vang cho
                    thương hiệu, uy tín của mình như: Tượng đài công nhân mỏởQuảng Ninh;3pho tượng lớn tại Việt Trì (Phú
                    Thọ); đúc phù điêu
                    cho Nhà hát Múa rối Trung ương; tượng Nguyên phiÝLanởGia Lâm (Hà Nội... Tiêu biểu hơn cả, là năm
                    2012 đã đúc thành</p>
            </div>
        </div>
    </section>
    <section class="my-5 text-center">
        <div class="container m-auto color-web px-3 px-sm-3 px-md-5 px-lg-0">
            <h1 class="text-main">VŨ DUY ĐIỆP</h1>
            <h1 class="text-main">“NGHỆ NHÂN CỦA NHIỀU TÁC PHẨM TÂM LINH"</h1>
            <img class="my-4" src="../assets/images/good_projects_stiker.png">
            <div class="row">
                <div class="col-12 col-md-6 p-2">
                    <img src="../assets/images/welcome-4.png" class="w-100">
                </div>
                <div class="col-12 col-md-6 p-2">
                    <img src="../assets/images/welcome-6.png" class="w-100">
                </div>
                <div class="col-12 col-md-5 p-2">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <img src="../assets/images/welcome-6.png" class="w-100">
                        </div>
                        <div class="col-12">
                            <img src="../assets/images/welcome-7.png" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 p-2">
                    <img src="../assets/images/welcome-8.png" class="w-100 h-100"/>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-justify px-3 mt-4">
                <p class="text-monospace">Chia sẻ của hai Nghệ nhân Ưu tú Dương Bá Dũng (Giám đốc Doanh nghiệp tư nhân
                    Bá Dũng) và Vũ Duy Điệp cho thấy: Điều
                    giúp các ông vượt qua mọi khó khăn, vất vả suốt chặng đường làm nghề cho đến khi được vinh danh nghệ
                    nhân phải kể đến
                    những giá trị, gốc rễ, cội nguồn của làng nghề cũng như sự tương tác, hỗ trợ của các đồng nghiệp
                    trong làng nghề. Các ông may
                    mắn sinh sống trong làng nghề đúc đồng Vạn Điểm, thị trấn Lâm, ngày ngày được gắn bó với các công
                    việc của làng nghề nên
                    có điều kiện thẩm thấu trình độ, kỹ năng làm nghề của các bậc cha anh, các truyền nhân đi trước, từ
                    đó tích lũy cho mình các
                    phương pháp làm nghề truyền thống.</p>
            </div>
        </div>
    </section>
@endsection
