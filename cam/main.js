//global variables.

let width = 500,
    height = 0,
    filter = 'none',
    streaming = false;

//dom eleemts
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const photos = document.getElementById('photos');
const photoButton = document.getElementById('take-me');
const clearbutton = document.getElementById('clear-button');
const photofilter = document.getElementById('photo-filter');

//get media stream 

navigator.mediaDevices.getUserMedia({video: true, audio: false})
    .then(function(stream) {
        //link to the video src
        video.srcObject = stream;
        video.play();
    })
    .catch(function(err) {
        console.log(`Error: ${err}`);
    });

    //play when ready
    video.addEventListener('canplay', function(e) {
        if (!streaming) {
            height = video.videoHeight / (video.videoWidth / width);
            video.setAttribute('width', width);
            video.setAttribute('height', height);
            canvas.setAttribute('width', width);
            canvas.setAttribute('height', height);

            streaming = true;
        }
    }, false);

photoButton.addEventListener('click', function(e) {
    takePicture();

    e.preventDefault();
}, false);

function takePicture() {
    //console.log('picture');
    const context = canvas.getContext('2d');
    if (width && height) {
        canvas.width = width;
        canvas.height = height;
        context.drawImage(video, 0, 0, width, height);
        const imgUrl = canvas.toDataURL('image/png');
        //console.log(imgUrl);

        //create element
        const img = document.createElement('img');
        //set image src
        img.setAttribute('src', imgUrl);

        photos.appendChild(img);
    }
}