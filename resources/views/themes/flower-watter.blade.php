<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#f5f6fa" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="{{ $data->bride->username_man }} & {{ $data->bride->username_woman }}">
    <meta property="og:description" content="Hello Tamu Undangan! Kamu Di Undang..">
    <meta property="og:url" content="https://weddingcnk.com">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <title>Andra & Amel </title>
    <link rel="icon" href="https://weddingcnk.com/assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/kita.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.3/simplelightbox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link href="{{ asset('themes/google_fonts/Merriweather.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/google_fonts/Dynalight.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="{{ asset('themes/watercolor1/style.css') }}" rel="stylesheet">

</head>

<body>
    <div id="over-lay-welcome">
        <div class="row justify-content-md-center" style="margin:0 auto;">
            <div class="col-md-6 col-sm-12 col-md-offset-3">
                <img class="img-responsive" src="https://weddingcnk.com/assets/base/img/prokes.png">
                <p>Selamat datang di undangan pernikahan Kami.
                    <br>Gunakan browser Chrome atau Safari agar website tampil sempurna. Scroll untuk melihat detail
                    undangan.
                </p>
                <br>
                <p><strong>KETUK UNTUK MELANJUTKAN</a></strong></p>
            </div>
        </div>
    </div>
    <section class="full header pt-0 pb-0">
        <div class="container">
            <div class="justify-content-center mt-3" data-aos="fade-down" data-aos-duration="2000">
                <h5>TOGETHER <br> WITH THEIR FAMILIES</h5>
            </div>
            <div class="col-md-12 header-frame" data-aos="fade-down" data-aos-duration="1000">
                <h1>{{ $data->bride->username_man }}
                    <span>&</span> {{ $data->bride->username_woman }}
                </h1>
                <p class="mt-3"><span id="tanggal-weddingnya">{{ $data->event->akad_date }}</span></p>
            </div>
            <div class="col-md-12 to" data-aos="fade-down" data-aos-duration="3000">
                <i>Kepada Yth<br>Bapak/Ibu/Saudara/i</i>
                <h4 class="text-secondary mt-1">{{ request()->nama }}</h4>
                Di Tempat
            </div>
        </div>
        <div class="header-footer"></div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-12">
                <h2 class="text-secondary">GROOM <span>&</span> BRIDE</h2>
            </div>
            <div class="col-md-10 offset-md-1">
                السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ<br />
                <br />
                Dengan memohon Rahmat dan Ridho Allah SWT, Kami akan menyelenggarakan resepsi pernikahan Putra-Putri
                kami : <br><br>
            </div>
            <div class="row mt-5">
                <div data-aos="fade-up" data-aos-delay="100" class="col-md-6 mb-5  order-1 ">
                    <div class="row">
                        <div class="col-md-12 px-4 couple-ring girl">
                            <img src="{{ asset('storage/'. $data->bride->photo_man) }}" alt="Juliet Photo"
                                class="img-fluid">
                        </div>
                    </div>
                    <h3 class="caption display-4">{{ $data->bride->fullname_man }}</h3>
                    <p class="font-weight-bold">Putra dari Pasangan <br> Bpk {{ $data->bride->father_man }} dan {{
                        $data->bride->mother_man }}</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="col-md-6 mb-5 ">
                    <div class="row">
                        <div class="col-md-12 px-4 couple-ring man">
                            <img src="{{ asset('storage/'. $data->bride->photo_woman) }}" alt="Romeo Photo"
                                class="img-fluid">
                        </div>
                    </div>
                    <h3 class="caption display-4">{{ $data->bride->fullname_woman }}</h3>
                    <p class="font-weight-bold">Putri dari Pasangan <br> Bpk {{ $data->bride->father_woman }} dan {{
                        $data->bride->mother_woman }}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="max-width:1100px">
            <div class="row justify-content-md-center">
                <div class="col-md-4 mt-4 information-wrap" data-aos="fade-right">
                    <div class="information">
                        <h4 class="text-secondary mt-5">Akad Nikah</h4>
                        <p>
                            <span id="tanggal-acara-akad"></span><br>
                            {{ date("h:m", strtotime($data->event->akad_time)) }}
                        </p>
                        <span class="font-weight-bold">{{ $data->event->akad_place }}</span><br>
                        {{ $data->event->akad_address }} <div class="d-flex justify-content-center mt-4">
                            <img src=https://weddingcnk.com/assets/themes/watercolor1/themes/watercolor1/images/mahkota.png
                                alt="mahkota" style="max-height:30px">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 information-wrap" data-aos="fade-right" data-aos-delay="100">
                    <div class="information">
                        <h4 class="text-secondary mt-5">Resepsi</h4>
                        <p>
                            <span id="tanggal-acara-resespsi">{{ $data->event->resepsi_date }}<br>
                                {{ date("h:m", strtotime($data->event->resepsi_time)) }}
                        </p>
                        <span class="font-weight-bold">{{ $data->event->resepsi_place }}</span> <br>
                        {{ $data->event->resepsi_address }} <div class="d-flex justify-content-center mt-4">
                            <img src=https://weddingcnk.com/assets/themes/watercolor1/themes/watercolor1/images/mahkota.png
                                alt="mahkota" style="max-height:30px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map my-5">
        <div class="container">
            <div class="col-md-12">
                <h2 class="text-secondary">Map Location</h2>
            </div>
            <div class="col-md-12 mt-4">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        {!! $data->event->google_maps !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container" style="max-width:1000px">
            <div class="col-md-12">
                <h2 class="text-secondary">Our Gallery</h2>
            </div>
            <div class="row mt-5">

                @foreach ($data->albums as $album)
                <div class="col-md-3 col-6 py-2 px-2 frame" data-aos="zoom-in" data-aos-delay="100">
                    <a href="{{ asset('storage/'.$album->image ) }}">
                        <img src="{{ asset('storage/'.$album->image ) }}" alt="Gallery 1" class="img-fluid">
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section>
        <div class="container" style="max-width:1000px">
            <div class="col-md-12 mb-5">
                <h2 class="text-secondary">Our Love Story</h2>
            </div>
            <div class="col-md-12 text-left">
                <div class="owl-carousel">

                    @foreach ($data->story as $story)
                    <div class="p-2" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="mt-0 mb-3">{{ $story->title }}</h4>
                        <small class="pull-right d-block mb-2"><span class="date">{{ date("d M Y",
                                strtotime($story->date))
                                }}</span></small>
                        <p>{{ $story->content }}</p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <div class="col-md-12 mb-5">
                <h2 class="text-secondary">Our Video</h2>
            </div>
            <div class="col-md-12 mb-4">
                <div class="videoWrapper">
                    <iframe width=560 height=349 src="https://www.youtube.com/embed/{{ substr($data->youtube, 17) }}"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container" data-aos="flip-down">
            <div class="d-flex justify-content-center mb-5">
                <img src=https://weddingcnk.com/assets/themes/watercolor1/themes/watercolor1/images/mahkota-t.png
                    alt="mahkota" style="max-height:40px">
            </div>
            <div class="col-md-12 pt-4">
                <p><span>"</span>Tidak ada solusi yang lebih baik bagi dua insan yang saling mencintai di banding
                    pernikahan.<span>"</span></p>
                <h5 class="caption text-secondary">HR. Ibnu Majah</h5>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <img src=https://weddingcnk.com/assets/themes/watercolor1/themes/watercolor1/images/mahkota-b.png
                    alt="mahkota" style="max-height:40px">
            </div>
        </div>
    </section>
    <section class="countdown">
        <div class="container">
            <div class="col-md-12 mb-5">
                <h2 class="text-secondary">Time To Happy Day</h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <span class="expired"></span>
                </div>
                <div class="col-md-3 col-6 mb-2" data-aos="fade-left" data-aos-delay="100">
                    <div class="timer">
                        <span class="days">00</span>
                        <h5 class="timer-caption">Days</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2" data-aos="fade-left" data-aos-delay="200">
                    <div class="timer">
                        <span class="hours">00</span>
                        <h5 class="timer-caption">Hours</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2" data-aos="fade-left" data-aos-delay="300">
                    <div class="timer">
                        <span class="minutes">00</span>
                        <h5 class="timer-caption">Minutes</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-2" data-aos="fade-left" data-aos-delay="400">
                    <div class="timer">
                        <span class="seconds">00</span>
                        <h5 class="timer-caption">Seconds</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="col-md-12 mb-5">
            <h2 class="text-secondary">Guest Book</h2>
        </div>
    </div>
    <section class="pt-1 block mx-2">
        <div class="container">
            <div class="col-md-12 text-left">
                <form id="guestbook" action="javascript:void();" novalidate="true">
                    <div class="form-group">
                        <label for="guestName">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Your Name"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan/Doa</label>
                        <textarea name="komentar" id="komentar" class="form-control" rows="3" autocomplete="off"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <button type=submit id="submitKomen" class="btn btn-primary px-5">Kirim <img
                                src=https://weddingcnk.com/assets/themes/watercolor1/images/send-w.png alt="send icon"
                                style="width:20px;margin-left:5px"></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="show-guest-book px-2 mt-5">
            <div class="container text-left">
                <div class="row justify-content-md-center layout-komen">

                    <div class="gus"></div>

                </div>
            </div>
        </div>
    </section>
    <footer class="py-4">
    </footer>
    <div style="height:50px;width:60px;position: absolute;bottom:0;z-index:-1;visibility: hidden;">
        <audio id="player" loop>
            <source src="https://weddingcnk.com/assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/musik.mp3"
                type="audio/mp3">
        </audio>
    </div>
    <div class="play-pause btn-play-pause" id="button-control"><img
            src=https://weddingcnk.com/assets/themes/watercolor1/images/play-pause.svg alt="play pause" width=25px>
    </div>
    <button type=button class="btn-donation" data-toggle="modal" data-target="#modalGift">
        <img src=https://weddingcnk.com/assets/themes/watercolor1/images/gift-donation.png alt="donation"
            style="width:18px;margin-right:5px"> Kirim Hadiah
    </button>
    <div class="btn-qrcode" id="button-control" data-toggle="modal" data-target="#modalQrCode"><img
            src=https://weddingcnk.com/assets/themes/watercolor1/images/qrcode.png alt="qrcode" width=25px></div>
    <div class="modal fade" id="modalGift" tabindex="-1" role="dialog" aria-labelledby="modalGiftLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalGiftLabel">Kirim Hadiah</h5>
                    <button type=button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src=https://weddingcnk.com/assets/themes/twelve/images/love.png alt="donation"
                            style="max-width: 60px;">
                        <h5 class="font-bold text-center">Kirim Hadiah<br><small>Untuk Andra & Amel </small></h5>
                    </div>

                    <div class="row">
                        <div class="col-12" style="text-align:center">
                            <b>OVO </b><br>
                            <span onClick='copyText(this)'>089667771377 <img
                                    src=https://weddingcnk.com/assets/themes/twelve/images/copy.png
                                    style="height:13px;margin-top:-5px;cursor:pointer"></span><br>
                            a/n Ryan Apriansyah <br>

                        </div>
                        <div class="col-sm-10 offset-sm-1">
                            <img src="https://weddingcnk.com/assets/users/mIjh78y8ge13b89d99c1a29132e57d2ca/rekening/qrcode3.png"
                                alt="Qris" class="w-100">
                        </div>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="modalQrCode" tabindex="-1" role="dialog" aria-labelledby="modalQrCodeLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalQrCodeLabel">QrCode Tamu</h5>
                    <button type=button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="maps">
                            <span id="qrcode"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.3/simple-lightbox.min.js></script>
    <script src=https://unpkg.com/aos@2.3.1/dist/aos.js></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css">
    <script src=https://cdn.plyr.io/3.6.8/plyr.js></script>
    <script src={{ asset('themes/watercolor1/js') }}/musicv2.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js></script>
    <script src={{ asset('themes/watercolor1/js') }}/moment-with-locales.js></script>
    <script src={{ asset('themes/watercolor1/js') }}/classyqr.js></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var base_url = 'URL_BASE';
    </script>
    <script>
        var tanggal_akad = '{{ $data->event->akad_date }}';
    </script>
    <script>
        var tanggal_resepsi = `{{ $data->event->resepsi_date }}`;
    </script>
    <script>
        var tanggal_pernikahan = `{{ $data->event->akad_date }}`;
    </script>

    <script>
        var akad_time = `{{ $data->event->akad_time }}`;
    </script>
    <script>
        var resepsi_time = `{{ $data->event->resepsi_time }}`;
    </script>
    <script>
        $(document).ready(function() {
        $("#over-lay-welcome").click(function() {
                    $("#over-lay-welcome").fadeOut(650);
                    $("#player").get(0).play(); //play musik;
                });
        var kode = "Tidak Ada Qrcode";
        $("#qrcode").ClassyQR({
        create:true,
        type:'text',
        text: kode
        });
        });
    </script>
    <script>
        addEventListener("click", function() {
    var
          el = document.documentElement
        , rfs =
               el.requestFullScreen
            || el.webkitRequestFullScreen
            || el.mozRequestFullScreen
    ;
    rfs.call(el);
});
        moment.locale('id'); //set indonesian format
    //output = Senin, 17 Agustus 2020
    var date_resepsi = moment(tanggal_resepsi).format('dddd, Do MMMM YYYY'); 
    var date_akad = moment(tanggal_akad).format('dddd, Do MMMM YYYY'); 
    //output = 17 / 08 / 2020
    var date_pernikahan = moment(tanggal_pernikahan).format('dddd, Do MMMM YYYY');  //untuk sampul
    $("#tanggal-acara-resepsi").html(date_resepsi);
    $("#tanggal-acara-akad").html(date_akad);
    $("#tanggal-weddingnya").html(date_pernikahan); //untuk sampul
    var countDownDate=new Date('{{ $data->event->akad_date }} {{ $data->event->akad_time }}').getTime(),x=setInterval(function(){var e=(new Date).getTime(),n=countDownDate-e,t=Math.floor(n/864e5),a=Math.floor(n%864e5/36e5),o=Math.floor(n%36e5/6e4),m=Math.floor(n%6e4/1e3);document.getElementsByClassName("days")[0].innerHTML=t,document.getElementsByClassName("hours")[0].innerHTML=a,document.getElementsByClassName("minutes")[0].innerHTML=o,document.getElementsByClassName("seconds")[0].innerHTML=m,n<0&&(clearInterval(x),document.getElementsByClassName("expired").innerHTML="EXPIRED")},1e3);
    AOS.init();
        $('.gallery a').simpleLightbox({
        docClose: false,
        disableScroll: true,
        disableRightClick: true
    });
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    });

    </script>
    <script>
        window.addEventListener("contextmenu", function(e) {
            e.preventDefault()
        }, !1);
        function copyText(element) {
            var range, selection, worked;

            if (document.body.createTextRange) {
                range = document.body.createTextRange();
                range.moveToElementText(element);
                range.select();
            } else if (window.getSelection) {
                selection = window.getSelection();
                range = document.createRange();
                range.selectNodeContents(element);
                selection.removeAllRanges();
                selection.addRange(range);
            }

            try {
                document.execCommand('copy');
                alert('Number copied');
            }
            catch (err) {
                alert('Unable to copy number');
            }
        }
    </script>

    <script>
        $(document).ready(function () {
            $(document).on("click",'#submitKomen',function (e) {
                e.preventDefault();
                var data = {
                    'nama': $('#nama').val(),
                    'komentar': $('#komentar').val(),
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ url('wedding',$data->subdomain) }}",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        if (response.status == 400) {
                           $.each(response.errors, function (key, err_value) {
                                $('#saveform_error').append('<div class="alert alert-danger">' + err_value + '</div>');
                           });
                           Swal.fire({
                                title: 'error',
                                text: response.messages,
                                icon: 'error',
                                confirmButtonText: 'Ok'
                          })
                        } else {
                            console.log(response.status);
                            Swal.fire({
                                title: 'success',
                                text: response.messages,
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            })

                            $('#guestbook').find('input').val('');
                            fetchdata();
                        }
                    }
                });
            });
            fetchdata();
            function fetchdata() {
                $.ajax({
                    type: "GET",
                    url: "{{ url('data-comment',$data->subdomain) }}",
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        $('.gus').html('');
                        $.each(response.data, function (key, value) {
                            $('.gus').append('<div class="col-md-12 mb-3">' +
                                '<div class="media px-3 media-comment">' +
                                '<img class="rounded-circle mr-3 d-none d-sm-block d-md-block d-lg-block" src="https://na.ui-avatars.com/api/?name='+value.slug+'" &size=50 alt="Image Avatar">' +
                                '<div class="media-body">'+
                                '<div class="mb-2">'+
                                    '<h5 class="card-text">' + value.nama + '</h5>' +
                                '</div>'+
                                '<p>' + value.komentar + '</p>' +
                                '</div>' +
                                '</div>' +
                                '</div>');
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>
{{--
$('.comment').find('#stk').html("");
$.each(data.data, function (key, item) {
$('.comment').find('#stk').append('<div class="col-md-12 mb-3 komen">\
    \
    \
    \
    <div class="mb-2">\
        <h5 class="h6 mb-0">'+item.nama+'</h5>\
    </div>\
    <p>'+item.komentar'</p>\
</div>\
</div>\
</div>');
}); --}}