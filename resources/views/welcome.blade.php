<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=1028, initial-scale=1">

        <title>SKADA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .btn {
                display: inline-block;
                margin-bottom: 0;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -ms-touch-action: manipulation;
                touch-action: manipulation;
                cursor: pointer;
                background-image: none;
                border: 1px solid transparent;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                border-radius: 4px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            
            .btn-danger {
                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
            }
        </style>
    </head>
    <body>
        <div>
            <div
            style="position: fixed;left: 0;bottom: 0;left: 0;width:100%;bottom:0;background-color:#FFFFFF; padding:10px 0px;"
            >
            <h1 style="text-align:center; margin:0px; padding:0px;" >
                <button class="btn btn-danger" style="width:50%;" onclick="if(confirm('Apakah anda yakin akan keluar sesi kuliah ?')){ window.location.href='../../../{{ $konsol == 'd' ? 'dosen' : 'mahasiswa' }}/keluar_kuliah?id={{ $room }}' }">Keluar Sesi Kuliah</button>
            </h1>
            </div>
            <script src="https://meet.jit.si/external_api.js"></script>
            <script>
                var domain = "meet.jit.si";
                var options = {
                    roomName: "{{ $room }}",
                    width: '100%',
                    height: '100%',
                    parentNode: undefined,
                    configOverwrite: {},
                    interfaceConfigOverwrite: {
                        filmStripOnly: false
                    },
                    noSSL:false
                }
                var api = new JitsiMeetExternalAPI(domain, options);
                var yourRoomPass='123456';
                api.addEventListener('passwordRequired', () => {
                    api.executeCommand('password', yourRoomPass);
                });
            
                // when local user has joined the video conference 
                api.addEventListener('videoConferenceJoined', (response) => {
                    // api.executeCommand('password', yourRoomPass);
                });
                setTimeout(() => {
                // why timeout: I got some trouble calling event listeners without setting a timeout :)
                
                    // when local user is trying to enter in a locked room 
                
                }, 5);
                // api.executeCommand('password', 'The Password');
            </script>
        </div>
    </body>
    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>-->
    <script>
        //  setInterval(function(){ alert("Hello"); }, 100);
        // $(document).ready(function(){
        //     var waitForEl = function(selector, callback, count) {
        //       if (jQuery(selector).length) {
        //         callback();
        //       } else {
        //         setTimeout(function() {
        //           if(!count) {
        //             count=0;
        //           }
        //           count++;
        //           console.log("count: " + count);
        //           if(count<10) {
        //             waitForEl(selector,callback,count);
        //           } else {return;}
        //         }, 100);
        //       }
        //     };
        //     // $('.new-toolbox').visible(none)
        //  var selector = $(".new-toolbox");
        //  setInterval({}=>{
             
        //     waitForEl(selector, function() {
        //       // work the magic
        //     });
        //       console.log("yay");
        //  })
        // });
    </script>
</html>
