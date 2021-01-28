// For CDN version default
ZoomMtg.setZoomJSLib('https://dmogdx0jrul3u.cloudfront.net/1.8.5/lib', '/av');

ZoomMtg.preLoadWasm();
ZoomMtg.prepareJssdk()

const zoomMeeting = document.getElementById("zmmtg-root")



$.ajax({
    type: "POST",
    url: "data.php",
    dataType: 'json',
    data: {
        userEmail: 'khalid@gmail.com'
    },
    success: function (data) {
        let meetingConfig = data

        // make an http request to your server to get the signature
        
        ZoomMtg.init({
            leaveUrl: meetingConfig.leaveUrl,
            webEndpoint: meetingConfig.webEndpoint,
            success: function () {
                ZoomMtg.join({
                    signature: meetingConfig.signature,
                    meetingNumber: meetingConfig.meetingNumber,
                    userName: meetingConfig.userName,
                    apiKey: meetingConfig.apiKey,
                    userEmail: meetingConfig.userEmail,
                    passWord: meetingConfig.passWord,
                    success: (success) => {
                        console.log(success)
                    },
                    error: (error) => {
                        console.log(error)
                    }
                })
            },
            error: function (res) {
                console.log(res);
            },
        });
    }
});