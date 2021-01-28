<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom</title>
    <!-- import #zmmtg-root css -->
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.8.5/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.8.5/css/react-select.css" />
    <style>
        * {
            transition: all .5s;
        }
        *:focus {
            outline: none !important;
        }
        #participants-list-0 .participants-item__buttons{
            display: none !important;
            opacity: 0 !important;
            visibility: hidden !important;
        }
        .ReactVirtualized__List.chat-virtualized-list:focus {
            outline: none !important;
        }
        .btn-group>.btn:focus,
        .btn-group-vertical>.btn:focus {
            outline: none !important;
        }
        .join-dialog__tabs .zmu-tabs__tab-container .zmu-tabs__tabs-list .zmu-tabs__tab-bar--active:focus:before {
            position: absolute;
            content: '';
            width: 0;
            height: 0;
            border-left: 13px solid transparent;
            border-top: 6px solid #fff;
            border-right: 13px solid transparent;
            bottom: -7px;
            left: 50%;
            -webkit-transform: translateX(-6px);
            -ms-transform: translateX(-6px);
            transform: translateX(-6px);
            z-index: 1;
            border: none !important;
        }
        .ReactVirtualized__Grid__innerScrollContainer>div {
            border: none !important;
        }
    </style>
</head>

<body>

    <!-- added on import -->
    <div id="zmmtg-root"></div>
    <div id="aria-notify-area"></div>

    <!-- added on meeting init -->
    <div class="ReactModalPortal"></div>
    <div class="ReactModalPortal"></div>
    <div class="ReactModalPortal"></div>
    <div class="ReactModalPortal"></div>
    <div class="global-pop-up-box"></div>
    <div class="sharer-controlbar-container sharer-controlbar-container--hidden"></div>

    <!-- import ZoomMtg dependencies -->
    <script src="https://source.zoom.us/1.8.5/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.8.5/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.8.5/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.8.5/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.8.5/lib/vendor/lodash.min.js"></script>

    <!-- import ZoomMtg -->
    <script src="https://source.zoom.us/zoom-meeting-1.8.5.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- import local .js file -->
    <script src="js/index.js"></script>
</body>

</html>