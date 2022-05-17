<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-copy'></i> Danh mục</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon la la-archive'></i> Sản phẩm</a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contact') }}'><i class='nav-icon la la-address-book'></i> Liên hệ</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('post') }}'><i class='nav-icon la la-pager'></i> Bài viêt</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>