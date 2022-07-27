<style>
    .show-cart {
        position: fixed;
        bottom: 10em !important;
        right: 5px !important;
        z-index: 9;
    }
</style>
<div>
    <a href="tel:0949806083" type="button"
       class="btn bg-main text-white border-white show-cart rounded-pill d-flex align-items-center p-1"
       data-toggle="modal" data-target="#cart">
        <div class="font-weight-bold p-1">0949.806.083</div>
        <i class="fas fa-phone fa-2x bg-warning p-2 rounded-circle"></i>
    </a>
</div>
<!-- Modal -->
{{--    <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalCenterTitle">Giỏ hàng của bạn</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div id="packs"></div>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng giỏ hàng</button>--}}
{{--                    <a type="button" href="{{route("client.cart")}}" class="btn btn-primary">Thanh toán</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <script>--}}
{{--        function changeQuantity(id, quantity) {--}}
{{--            $.ajax({--}}
{{--                url: "{{route("change.quantity")}}",--}}
{{--                type: "POST",--}}
{{--                data: {--}}
{{--                    id: id,--}}
{{--                    quantity: quantity,--}}
{{--                    _token: "{{csrf_token()}}"--}}
{{--                },--}}
{{--                beforeSend: function () {--}}
{{--                    $(".loading").html(--}}
{{--                        '<img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif" class="w-25"/>'--}}
{{--                    )--}}
{{--                },--}}
{{--                success: function (response) {--}}
{{--                    $("#packs").html(response);--}}
{{--                    $(".loading").html("");--}}
{{--                    if(response==="empty"){--}}
{{--                        location.reload();--}}
{{--                    }--}}
{{--                },--}}
{{--                error: function (error) {--}}
{{--                    console.log(error);--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--        function removePack(id){--}}
{{--            $.ajax({--}}
{{--                url: "{{route("client.cart.removeItem")}}",--}}
{{--                type: "POST",--}}
{{--                data: {--}}
{{--                    id: id,--}}
{{--                    _token: "{{csrf_token()}}"--}}
{{--                },--}}
{{--                beforeSend: function () {--}}
{{--                    $(".loading").html(--}}
{{--                        '<img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/35771931234507.564a1d2403b3a.gif" class="w-25"/>'--}}
{{--                    )--}}
{{--                },--}}
{{--                success: function (response) {--}}
{{--                    if(id !== -1 ){--}}
{{--                        Swal.fire({--}}
{{--                            text: 'Xóa thành công',--}}
{{--                            icon: 'success',--}}
{{--                        })--}}
{{--                    }--}}
{{--                    if(response==="empty"){--}}
{{--                        location.reload();--}}
{{--                    }--}}
{{--                    $("#packs").html(response);--}}
{{--                    $(".loading").html("")--}}
{{--                },--}}
{{--                error: function (error) {--}}
{{--                    console.log(error);--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}

{{--        // $(".pack").on("change",function () {--}}
{{--        //--}}
{{--        // });--}}
{{--        $(document).on('change', '.pack', function() {--}}
{{--            changeQuantity(this.id,this.value)--}}
{{--        });--}}
{{--        $(document).on('click', '.remove-pack', function() {--}}
{{--            console.log(this.id);--}}
{{--            removePack(this.id)--}}
{{--        });--}}
{{--        removePack(-1);--}}

{{--    </script>--}}
