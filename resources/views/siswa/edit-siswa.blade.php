
<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     
</head>
 
     <body>
        @extends('master')
       <!-- Google Tag Manager (noscript) -->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
     height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
     <!-- End Google Tag Manager (noscript) -->
     @include('template/sidebar')
         <div class="main-panel">
             <!-- fixed plugin  -->
         
             <!-- Navbar -->
         @include('template/header')

             <!-- End Navbar -->
           
             <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card strpied-tabled-with-hover">
                                 <div class="card-header ">
                                     <h4 class="card-title">Tabel Siswa</h4>
                                     <p class="card-category">Here is a subtitle for this table</p>
                                 </div>
                                 <div class="card-body table-full-width table-responsive">
                                    <section id="edit">
                                        <div class="container">
                                            <div class="card">
                                                <div class="card-head">
                                                </div>
                                                <div class="container pt-4 font-weight-bold">
                                                    <form action="{{route('siswa.update',$siswas->id)}}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="nama">NIPD</label>
                                                                <input type="text" class="form-control " value="{{$siswas->nipd}}" id="nama" name="nipd">
                                                        
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                                <label for="nama">Nama</label>
                                                                <input type="text" class="form-control " value="{{$siswas->nama}}"  id="nama" name="nama">
                                                       
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCity">Kelamin</label>
                                                                <select id="jenis_kelamin" class="form-control " name="jenis_kelamin">
                                                                    <option value="" selected>--Pilih Kelamin--</option>
                                                                    <option value="P"{{ (old('jenis_kelamin') ?? $siswas->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                                    <option value="L"{{ (old('jenis_kelamin') ?? $siswas->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                                </select>
                                                          
                                                            </div>
                                                            <div class="form-group col-md-8">
                                                                <label for="kelas">Kelas</label>
                                                                <select id="kelas" class="form-control " name="kelas">
                                                                    <option value="" >Pilih Kelas</option>
                                                                    <option value="X"{{ (old('kelas') ?? $siswas->kelas) == 'X' ? 'selected' : '' }}>X</option>
                                                                    <option value="XI"{{ (old('kelas') ?? $siswas->kelas) == 'XI' ? 'selected' : '' }}>XI</option>
                                                                    <option value="XII"{{ (old('kelas') ?? $siswas->kelas) == 'XII' ? 'selected' : '' }}>XII</option>
                                                                </select>
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Address</label>
                                                            <textarea name="alamat" class="form-control" id="" >{{$siswas->alamat}}</textarea>
                                                      
                                                            {{-- <input type="text"  id="inputAddress" placeholder="1234 Main St"> --}}
                                                       
                                                        </div>
                                                
                                                        </div>
                                                        <button type="submit" class="btn btn-light mt-3" style="width: 100%; ">Update Data</button>
                                                        <a href="{{route('siswa.index')}}" class="btn btn-primary mt-2" style="width: 100%">Back</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                 </div>
                             </div>
                         </div>
                            <footer class="footer">
                                <div class="container">
                                    <nav>
                                        <ul class="footer-menu">
                                            <li>
                                                <a href="#">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Company
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Portfolio
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Blog
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="copyright text-center">
                                            ©
                             <script>
                                 document.write(new Date().getFullYear())
                             </script>
                             <a href="https://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                         </p>
                     </nav>
                 </div>
             </footer>
         </div>
     </div>

     <script>
       // Facebook Pixel Code Don't Delete
       !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
         n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
         document,'script','//connect.facebook.net/en_US/fbevents.js');
 
       try{
         fbq('init', '111649226022273');
         fbq('track', "PageView");
 
       }catch(err) {
         console.log('Facebook Track Error:', err);
       }
     </script>
     <noscript>
       <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
       />
     </noscript>
 </body>
 <!--   Core JS Files   -->
 <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
 <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
 <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="../assets/js/plugins/bootstrap-switch.js"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
 <!--  Chartist Plugin  -->
 <script src="../assets/js/plugins/chartist.min.js"></script>
 <!--  Share Plugin -->
 <script src="../assets/js/plugins/jquery.sharrre.js"></script>
 <!--  Notifications Plugin    -->
 <script src="../assets/js/plugins/bootstrap-notify.js"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="../assets/js/demo.js"></script>
 
 </html>
 

                                                    {{-- <form action="{{route('siswa.update',$siswas->id)}}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                      --}}
                                             