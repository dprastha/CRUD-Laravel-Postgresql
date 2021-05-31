<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
   <nav class="navbar navbar-expand-sm navbar-default">
       <div id="main-menu" class="main-menu collapse navbar-collapse">
           <ul class="nav navbar-nav">
               <li class="menu-title">Pegawai</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('pegawai.index')}}"> <i class="menu-icon fa fa-list"></i>Daftar Pegawai</a>
               </li>
               <li class="">
                   <a href="{{route('pegawai.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah Pegawai</a>
               </li>

               <li class="menu-title">Surat Masuk</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('suratmasuk.index')}}"> <i class="menu-icon fa fa-list"></i>Daftar Surat Masuk</a>
               </li>
               <li class="">
                   <a href="{{route('suratmasuk.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah Surat Masuk</a>
               </li>

               <li class="menu-title">Surat Keluar</li><!-- /.menu-title -->
               <li class="">
                   <a href="{{route('suratkeluar.index')}}"> <i class="menu-icon fa fa-list"></i>Daftar Surat Keluar</a>
               </li>
               <li class="">
                   <a href="{{route('suratkeluar.create')}}"> <i class="menu-icon fa fa-plus"></i>Tambah Surat Keluar</a>
               </li>
           </ul>
       </div><!-- /.navbar-collapse -->
   </nav>
</aside>
<!-- /#left-panel -->